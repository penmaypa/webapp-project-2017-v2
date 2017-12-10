
<?php
    include 'login.php';

   
    $user_city = $_SESSION["username"];

    echo "Process 1 displays tempUsername:"."$user_city";

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
	
	echo "<br>".$user_city."<br>";
     
     
     
    if ($user_city === 'dublin') {
          header("Location: frontend_webpage/index/dublin.php");
     }else{
         header("Location: frontend_webpage/index/home.html");
    } 
    
?>