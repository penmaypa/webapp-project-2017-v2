<!-- Ticket Master Documentation and code:
		REFERENCE: 	https://developer.ticketmaster.com/products-and-docs/apis/discovery-api/v2/ -->

<!DOCTYPE html>
<html>
	<head>
		<title>Giggs2Go in Glasgow</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style4.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="navbar-fixed-top navbar-inverse" id="home">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Giggs2Go</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="home.html">Home</a></li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ireland
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="dublin.php">Dublin</a></li>
			          <li><a href="galway.php">Galway</a></li>
			          <li><a href="cork.php">Cork</a></li>
			        </ul>
			      </li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">UK
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="london.php">London</a></li>
			          <li><a href="glasgow.php">Glasgow</a></li>
			          <li><a href="birmingham.php">Birmingham</a></li>
			          <li><a href="manchester.php">Manchester</a></li>
			        </ul>
			      </li>
			      <li><a href="logout.html">Logout</a></li>
			    </ul>
			  </div>
			</nav>
		
	</div>
	
	<div class="jumbotron4">
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
		<div class="container" id="artist">
			<div class="col-md-6">
				<h1>Upcoming Events In Glasgow</h1>
			</<div>
		</div>
		</div>
	
	<div class="fav">
	<div class="row padding" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1>Artists</h1>
					 	<br>
					 	<br>
				
				<!-- $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music"); -->
				<p style="font-size:18px;">	
					
					<?php 
					
										
						$x=0;
						$y = 0;
						
						
						$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
						$json = json_decode($json, true);
						
						for ($x = 0; $x <= 20; $x++) {
						    echo $json["_embedded"]["events"][$x]["name"],"<br>";
						}	
					?>
				</p>
				
					</div>
					<div class="col-md-2">
					   <h1>Dates</h1>
					   <br>
					   <br>
					   <p style="font-size:18px;">	

					    <?php
		                    
		                    $x=0;
		                    $y = 0;
		                    
		                    
		                    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
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
		                  </p>
		
					</div>
					<div class="col-md-2">
						<h1>Times</h1>
					   <br>
					   <br>
					   
					   <p style="font-size:18px;">		 	
					    <?php
		                    
		                    $x=0;
		                    $y = 0;
		                    
		                    
		                    $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
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
		                 </p>
		                 
					</div>
					<div class="col-md-3">
							<h1>Venues</h1>
					   <br>
					   <br>
						
					<p style="font-size:18px;">	
						<?php

							$x=0;
							$y = 0;
							
							
							$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
							$json = json_decode($json, true);
							
							for ($x = 0; $x <= 20; $x++) {
							    echo $json["_embedded"]["events"][$x]["_embedded"]["venues"][$y]["name"],"<br>";
							}
							
						?>
					</p>
					</div>
					
				</div>
			</div>
			</div>
			
		<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-6">
				<h1>Get Tickets!</h1>
			</<div>
		</div>
		</div>
			
		<div class="fav">
		<div class="container" id="artist">
			<div class="col-md-7">
				<h1>Artists</h1>
					 	<br>
					 	
				
				<!-- $json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music"); -->
				<p style="font-size:18px;">	
					
					<?php 
					
										
						$x=0;
						$y = 0;
						
						
						$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
						$json = json_decode($json, true);
						
						for ($x = 0; $x <= 20; $x++) {
						    echo $json["_embedded"]["events"][$x]["name"],"<br>";
						}	
					?>
				</p>
		
			</div>
		
		
			<div class="col-md-2">
						<h1 style="color:white;">Heading</h1>
					 	<br>
					 	
					  	
						
						<p style="font-size:18px;">
						

							<?php
								$x=0;
								// $y = "<a href=  > Click Here </a>";
													
													
								$json = file_get_contents("https://app.ticketmaster.com/discovery/v2/events.json?apikey=EAMfG9ADdU4rCwmYkGGXxsG6ld8qx8p8&city=glasgow&countryCode=GB&classificationName=music");
								$json = json_decode($json, true);
								$some = $json;					
								
							//	 echo $json["_embedded"]["events"][$x]["url"]/*[$y]*/,"<br>";
							// echo "<a href='0'> Click Here </a>";
							
								$url =$json["_embedded"]["events"][0]["url"]; 
								$url1 =$json["_embedded"]["events"][1]["url"];
								$url2 =$json["_embedded"]["events"][2]["url"];
								$url3 =$json["_embedded"]["events"][3]["url"];
								$url4 =$json["_embedded"]["events"][4]["url"];
								$url5 =$json["_embedded"]["events"][5]["url"];
								$url6 =$json["_embedded"]["events"][6]["url"];
								$url7 =$json["_embedded"]["events"][7]["url"];
								$url8 =$json["_embedded"]["events"][8]["url"];
								$url9 =$json["_embedded"]["events"][9]["url"];
								$url10 =$json["_embedded"]["events"][10]["url"];
								$url11 =$json["_embedded"]["events"][11]["url"];
								$url12 =$json["_embedded"]["events"][12]["url"];
								$url13 =$json["_embedded"]["events"][13]["url"];
								$url14 =$json["_embedded"]["events"][14]["url"];
								$url15 =$json["_embedded"]["events"][15]["url"];
								$url16 =$json["_embedded"]["events"][16]["url"];
								$url17 =$json["_embedded"]["events"][17]["url"];
								$url18 =$json["_embedded"]["events"][18]["url"];
								$url19 =$json["_embedded"]["events"][19]["url"];
							
							?>
							<a <?php echo "href=$url"?>  > Click Here </a> <br>
							<a <?php echo "href=$url1"?>  > Click Here </a><br>
							<a <?php echo "href=$url2"?>  > Click Here </a><br>
							<a <?php echo "href=$url3"?>  > Click Here </a><br>
							<a <?php echo "href=$url4"?>  > Click Here </a><br>
							<a <?php echo "href=$url5"?>  > Click Here </a><br>
							<a <?php echo "href=$url6"?>  > Click Here </a><br>
							<a <?php echo "href=$url7"?>  > Click Here </a><br>
							<a <?php echo "href=$url8"?>  > Click Here </a><br>
							<a <?php echo "href=$url9"?>  > Click Here </a><br>
							<a <?php echo "href=$url10"?>  > Click Here </a><br>
							<a <?php echo "href=$url11"?>  > Click Here </a><br>
							<a <?php echo "href=$url12"?>  > Click Here </a><br>
							<a <?php echo "href=$url13"?>  > Click Here </a><br>
							<a <?php echo "href=$url14"?>  > Click Here </a><br>
							<a <?php echo "href=$url15"?>  > Click Here </a><br>
							<a <?php echo "href=$url16"?>  > Click Here </a><br>
							<a <?php echo "href=$url17"?>  > Click Here </a><br>
							<a <?php echo "href=$url18"?>  > Click Here </a><br>
							<a <?php echo "href=$url19"?>  > Click Here </a><br>
							
						</p>
			</div>
		</div>
		</div>
		
	</body>
</html>