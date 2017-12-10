<?php

	$x=0;
	$y = 0;
						
						
	$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
	$json = json_decode($json, true);
						
	for ($x = 0; $x <= 20; $x++) {
	  echo $json["_embedded"]["events"][$x]["url"],"<br>";
	}	
	
//for ($y = 0; $y <= 20; $y++) {
 //   echo $json["_embedded"]["events"][$y]["dates"]["start"]["localDate"]["localTime"],"<br>";
//}

 
 
//echo var_dumps($json["_embedded"]);


$apke = 'test';
echo test; 

?>
