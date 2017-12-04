<?php
    include 'login.php';

    $x=0;
    $y = 0;
    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
    $json = json_decode($json, true);
    for ($x = 0; $x <= 20; $x++) {
        echo $json["_embedded"]["events"][$x]["name"],"<br>";
    }
    //for ($y = 0; $y <= 20; $y++) {
     //   echo $json["_embedded"]["events"][$y]["dates"]["start"]["localDate"]["localTime"],"<br>";
    //}
     
     
    //echo var_dumps($json["_embedded"]);
    session_start();
    echo $_SESSION['myvar'];
     echo $_SESSION["username"];
     echo $_SESSION["second"];
     echo $_SESSION["city"];
     echo $_SESSION["query"];
     echo $_SESSION["getcity"];
     echo $result1['price'];
    echo $_SESSION["result1"];
   echo $_SESSION["dog"];
?>