<?php

$x=0;

$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=heleoTqKM6BG8OtZfxjDcLGqkGOdMIzf&city=dublin");
$json = json_decode($json, true);

for ($x = 0; $x <= 20; $x++) {
    echo $json["_embedded"]["events"][$x]["name"],"<br>";
}

//echo var_dumps($json["_embedded"]);

$apke = 'test';
echo test; 

?>
