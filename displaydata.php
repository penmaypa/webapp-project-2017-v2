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
   
   
   //insert
	if(isset($_POST['save']))
	{
		$sql = "INSERT INTO users (user_id, username, city)
		VALUES ('".$_POST["user_id"]."','".$_POST["username"]."','".$_POST["city"]."')";

		$result = mysqli_query($conn,$sql);
	}

//update

$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
echo "ID: " . $row["user_id"] . "<br> User ID: " . $row["user_id"]. "<br>" . " User Name: " . $row["username"]. "<br>" . " City: " . $row["city"] . " " . "<br>";
	}
	} else {
	echo "0 results";
	}



?>

<html>
       <form action="displaydata.php" method="post">
          User ID:<br>
          <input type="int" name="user_id">
          <br>
          Username:<br>
          <input type="varchar" name="username">
          <br>
          City:<br>
          <input type="varchar" name="city">
          <br><br>
          <input type="submit" name="save">
        </form> 
</html>




?>

