<?php
// Extract data from the data base


   $user = 'root';
   $pass = '';
   $db = 'testdb';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Connected successfully <br> <br>";
   
  //insert
	if(isset($_POST['login']))
	{
	   $usnamelog = $_POST["user_id"] ;
	}

//update
   

//update
$sql = "SELECT username FROM users WHERE username="."'".$unamelog."'";
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
       <form action="login.php" method="post">
          Username:<br>
          <input type="varchar" name="username">
          <br>
         Password: <br>
          <input type="varchar" name="password">
          <br><br>
          <input type="submit" name="login">
        </form> 
</html>



