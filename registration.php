<?php
// Extract data from the data base


   $user = 'penmaypa';
   $pass = '';
   $db = 'testdb';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Connected <br> <br>";
   
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
	<head>
		<title> Gigs to Go</title>
		 <link rel="stylesheet" href="registration/style.css">
		 <link rel="stylesheet" href="css/modal.css">
		 <script src="js/effects.js"></script>
		</head>
	
	<body>
			<video autoplay loop id="video-background" muted plays-inline>
				<source src="videos/vidbg.mp4" type="video/mp4">
			</video>

		<div class="form">
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
		
		</div>
		
	</body>
       
</html>



