<?php

    // Extract data from the data base
    session_start();


   $user = 'root';
   $pass = '';
   $db = 'testdb';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   
 if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);
   
    //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
            $query2 = "SELECT city FROM `users` WHERE username='$username'";
       
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $result2 = mysqli_query($conn,$query2) or die(mysql_error());
    $rows = mysqli_num_rows($result);
            if($rows==1){

    header("Location: user_profile.php"); // Redirect user to index.php
                }else{
    echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    }

}

   
?>
<html>
<head>
	<title> Gigs to Go</title>
     <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/modal.css">
	 <script src="js/effects.js"></script>
	 
	 
	 
</head>

	<body>
		<div class="mainbody">
			<video autoplay loop id="video-background" muted plays-inline>
				<source src="videos/vidbg.mp4" type="video/mp4">
			</video>
			 
			<div class="form">
				
			
				
				 <div id="myBtn" class="front-container">
					
					<div class="front-link">
					  Log In
					</div>
				</div>
				
				
					<!-- The Modal -->
					

					<br>
				 <div class="front-container">
					<a href="index.html">
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
			    
			    <!-- Log-In form -->
				<form action="index.php" method="post">
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