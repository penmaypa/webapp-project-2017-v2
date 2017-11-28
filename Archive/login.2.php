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
   
 if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
            if($rows==1){
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Redirect user to index.php
                }else{
    echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
}


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



