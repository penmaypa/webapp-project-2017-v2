<?php
    echo "hello world"
?>
<html>
<head>
	<title> Gigs to Go</title>
     <link rel="stylesheet" href="css/style.css">
	 <script src="js/effects.js"></script>

</head>



	<body>
		<div class="mainbody">
			<video autoplay loop id="video-background" muted plays-inline>
				<source src="videos/vidbg.mp4" type="video/mp4">
			</video>
			 
			<div class="form">
				<form action="displaydata.php" method="post">
				  Username:<br>
				  <input type="varchar" name="username">
				  <br>
				  Password:<br>
				  <input type="varchar" name="city">
				  <br><br>
				  <input type="submit" name="save">
				</form> 
			
				
				 <div class="front-container">
					<a href="index.html">
					<div class="front-link">
					  Log In
					</div>
				  </a>
				</div>
					<br>
				 <div class="front-container">
					<a href="index.html">
					<div class="front-link">
					  Sign-Up
					</div>
				  </a>
				</div>
			
		</div>
		

	</body>
</html>