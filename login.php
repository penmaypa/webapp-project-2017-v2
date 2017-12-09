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
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                }
            
            }
            
            
            ?>
          <html>
            <body onload="myFunction()">
                <script>
                    function myFunction() {
                      alert('You have type the wrong username/password');
                    window.location = 'index.php';
                    };
                </script>
                
            </body>
        </html>

