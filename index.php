<?php
    echo "hello world"
?>
<html>
<head>
	<title> Gigs to Go</title>
     <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/modal.css">
	 <script src="js/effects.js"></script>
</head>



	<body>
			<video autoplay loop id="video-background" muted plays-inline>
				<source src="videos/vidbg.mp4" type="video/mp4">
			</video>
			 
			 <h1> Gigs to Go</h1>
			 <h3> Go find your local gig</h3>
			
			 
			<div class="form">
				 <div id="myBtn" class="front-container">
					<a>
						<div class="front-link">
						  Log In
						</div>
					</a>
				</div>
				
					<!-- The Modal -->
					<br>
				 <div class="front-container">
					<a href="registration.php">
						<div class="front-link">
						  Sign-Up
						</div>
				  </a>
				</div>
			
			</div>
		
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close">&times;</span>
			  <h2>Log-In</h2>
			</div>
			<div class="modal-body">
				<form action="displaydata.php" method="post">
				  Username:<br>
				  <input type="varchar" name="username">
				  <br>
				  Password:<br>
				  <input type="password" name="password">
				  <br><br>
				  <input type="submit" name="save">
				</form> 
			</div>
			<div class="modal-footer">
			  <h3>Modal Footer</h3>
			</div>
		  </div>
		</div>
		
		<script>
			// Get the modal
			var modal = document.getElementById('myModal');
			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");
			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			// When the user clicks the button, open the modal 
			btn.onclick = function() {
				modal.style.display = "block";
			}
			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				modal.style.display = "none";
			}
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>

		

	</body>
</html>