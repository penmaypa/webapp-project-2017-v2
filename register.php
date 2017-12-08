

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



