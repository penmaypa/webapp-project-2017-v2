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
       
        //and password='".md5($password)."'";
        //Checking is user existing in the database or not
                $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
                $query2 = "SELECT city FROM `users` WHERE username='$username'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $result2 = mysqli_query($conn,$query2) or die(mysql_error());
        $rows = mysqli_num_rows($result);
                if($rows==1){
                   
                header("Location: user_profile.php"); // Redirect user to index.php
                            }else{
                echo "<div class='form'><h2>Username/password is incorrect.</h2><br/><h1>Click here to  <a href='index.php'>Log In again !</a></div></h1>";
                echo "<h1> or choose your city here</h1>";
                 echo "<h2><a href='dublin.php'>Dublin</a></h2>" ;
        		echo "<h2><a href='cork.php'>Cork</a></h2>" ;
        		echo "<h2><a href='london.php'>London</a></h2>" ;
        		echo "<h2><a href='manchester.php'>Manchester</a><h2>" ;
        		echo "<h2><a href='galway.php'>Galway</a></h2>" ;
        		echo "<h2><a href='birmingham.php'>Birmingham</a></h2>" ;
        		echo "<h2><a href='glasgow.php'>Glasgow</a></h2>" ;
            
                }
     }
            
            
            ?>