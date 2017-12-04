<!DOCTYPE html>
<html>
	<head>
		<title>Giggs2Go Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<div class="navbar-fixed-top navbar-inverse" id="home">
		<div class="container">
			<div class="navbar-brand">
				Giggs2Go
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				Menu
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.html">My Profile</a></li>
					<li><a href="logout.html">Logout</a></li>
					
				</ul>
			</div>
			
			
			
		</div>
		
	</div>
	
	<div class="jumbotron2">
		<div class="container">
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br></br>
		</div>
	</div>
	
	
	<div class="fav">
	<div class="row padding" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h1>Upcoming events in Dublin</h1>
				
				<!-- $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music"); -->
					
					<?php 
					
										
						$x=0;
						$y = 0;
						
						
						$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
						$json = json_decode($json, true);
						
						for ($x = 0; $x <= 20; $x++) {
						    echo $json["_embedded"]["events"][$x]["name"],"<br>";
						}	
					?>
				
					</div>
					<div class="col-md-4">
					   <h1>Dates</h1>
					   <br>
					   <br>
					   
					   
					    <?php
		                    
		                    $x=0;
		                    $y = 0;
		                    
		                    
		                    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
		                    $json = json_decode($json, true);
		                    
		                    for ($x = 0; $x <= 20; $x++) {
		                        echo $json["_embedded"]["events"][$x]["dates"]["start"]["localDate"],"<br>";
		                    }
		                    //for ($y = 0; $y <= 20; $y++) {
		                     //   echo $json["_embedded"]["events"][$y]["dates"]["start"]["localDate"]["localTime"],"<br>";
		                    //}
		                    
		                     
		                     
		                    //echo var_dumps($json["_embedded"]);
		                    
		                    
		                    //$apke = 'test';
		                    //echo test; 
		                    
		                   ?>
		
					</div>
					<div class="col-md-4">
						<h1>Times</h1>
					   <br>
					   <br>
					   
					   
					    <?php
		                    
		                    $x=0;
		                    $y = 0;
		                    
		                    
		                    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=dublin&countryCode=IE&classificationName=music");
		                    $json = json_decode($json, true);
		                    
		                    for ($x = 0; $x <= 20; $x++) {
		                        echo $json["_embedded"]["events"][$x]["dates"]["start"]["localTime"],"<br>";
		                    }
		                    //for ($y = 0; $y <= 20; $y++) {
		                     //   echo $json["_embedded"]["events"][$y]["dates"]["start"]["localDate"]["localTime"],"<br>";
		                    //}
		                    
		                     
		                     
		                    //echo var_dumps($json["_embedded"]);
		                    
		                    
		                    //$apke = 'test';
		                    //echo test; 
		                    
		                   ?>
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
			</div>
			
		<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-6">
		
			</div>
		
		
			<div class="col-md-6">
				
			</div>
		</div>
		</div>
		<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-6">
				</br>
				</br>
				</br>
					<img src="artistpic.jpg" style="width:200px;height:200px;" class="img-rounded img-responsive" alt="artist"/></a>
			</div>
		
		
			<div class="col-md-6">
				
			</div>
			<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-6">
				</br>
				</br>
				</br>
					<img src="artistpic.jpg" style="width:200px;height:200px;" class="img-rounded img-responsive" alt="artist"/></a>
			</div>
		
		
			<div class="col-md-6">
				
			</div>
		</div>
		</div>
		<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-6">
				</br>
				</br>
				</br>
					<img src="artistpic.jpg" style="width:200px;height:200px;" class="img-rounded img-responsive" alt="artist"/></a>
			</div>
		
		
			<div class="col-md-6">
				
			</div>
		</div>
		</div>
	</body>
</html>