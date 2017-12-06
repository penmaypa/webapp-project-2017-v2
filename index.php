<?php
    echo "hello world"
?>
<html>
<head>
	<title> Gigs to Go</title>
     <link rel="stylesheet" href="css/style.css">

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
			
			</div>
			
			
		</div>
		

	</body>
</html>