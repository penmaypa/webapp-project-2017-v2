<?php
    include 'login.php';
    

    $x=0;
    $y = 0;
    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
    $json = json_decode($json, true);
    for ($x = 0; $x <= 20; $x++) {
        echo $json["_embedded"]["events"][$x]["name"],"<br>";
    }
    //for ($y = 0; $y <= 20; $y++) {
     //   echo $json["_embedded"]["events"][$y]["dates"]["start"]["localDate"]["localTime"],"<br>";
    //}
    
    $tempUsername = $_SESSION["username"];

    echo "Process 1 displays tempUsername:"."$tempUsername";

    $sql = "SELECT city FROM `users` WHERE username='penuel'";

	$result = mysqli_query($conn,$sql) or die(mysql_error());

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["city"] . " " . "<br>";
	}
	} else {
	echo "0 results";
	}
     
     
    //echo var_dumps($json["_embedded"]);
    //session_start();
     echo $_SESSION["username"];
?>