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
   
   //and password='".md5($password)."'";
   //insert
	if(isset($_POST['save']))
	{
		$sql = "INSERT INTO users (username, city, email, country, password)       
		VALUES ('".$_POST["username"]."','".$_POST["city"]."','".$_POST["email"]."','".$_POST["country"]."','".$_POST["password"]."')";

		$result = mysqli_query($conn,$sql);
	}
?>

<html>
       <form action="registration.php" method="post">
          Username:<br>
          <input type="varchar" name="username">
          <br>
          Password:<br>
          <input type="password" name="password">
          <br>
          Email:<br>
          <input type="varchar" name="email">
          <br>
            Country:<br>
          <input type="varchar" name="country">
          <br>
           City:<br>
          <input type="varchar" name="city">
          <br>
          
          <br>
          <input type="submit" name="save">
        </form> 
</html>



