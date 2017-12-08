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
		 <script src="js/effects.js"></script>
		</head>
	
	<body>
			<video autoplay loop id="video-background" style="
				margin-left: -20px;
				position: fixed;
				width: auto;
				height: 123%;
				z-index: -5;
				margin-top: -100px;
				left: 0;
			" muted plays-inline>
				<source src="videos/vidbg.mp4" type="video/mp4">
			</video>

		<div class="form">
		<form action="registration.php" method="post" 
			style="
				position: absolute;
				opacity: 0.8;
				padding: 15px;
				font-size: 1.4em;
				float: left;
				margin-top: 3vh;
				  
				margin-left: 15%;
				margin-right: 15%;
				background-color: white;
				width: 300px;
				border-radius: 20px;
			">
			<h1> Gigs to Go</h1>
	
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



