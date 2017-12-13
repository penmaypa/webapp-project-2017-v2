<?php
// Extract data from the data base


   $user = 'penmaypa';
   $pass = '';
   $db = 'testdb';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Connected successfully <br> <br>";
   
  $hello;

$sql = "SELECT * FROM users WHERE username='rehan'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["user_id"] . "<br> User ID: " . $row["user_id"]. "<br>" . " User Name: " . $row["username"]. "<br>" . " City: " . $row["city"] . " " . "<br>";
	
	    $user_city = $row["city"];
	}
	} else {
	echo "0 results";
	}

echo "<br><br>".$hello ;

?>

