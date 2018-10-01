<?php
$homeActive = (isset($homeActive))?$homeActive:"";
$weddingActive = (isset($weddingActive))?$weddingActive:"";
$reservationActive = (isset($banquetActive))?$banquetActive:"";
$banquetActive = (isset($banquetActive))?$banquetActive:"";
$mediaActive = (isset($mediaActive))?$mediaActive:"";
$contactActive = (isset($contactActive))?$contactActive:"";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$arrPageData[0]["strTitle"]?></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="
	anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
</head>
<body>

 <nav>
	<a href="index.php?id=1"><img src="images/logo.png" class="logo" alt="logo"></a>
	<label for="toggle">&#9776;</label>
	<input type="checkbox" id="toggle">
	<div class="navigation">
			<ul id="nav" class="topNav">
				<li><a class="<?=$homeActive?>" href="index.php?id=1">Home</a></li>
					<li>
						<a class="<?=$weddingActive?>">Weddings</a>
							<ul class="dropdown">
								<li><a href="index.php?id=3">Planning</a></li>
								<li><a href="index.php?id=4">Catering and Menu</a></li>
								<li><a href="index.php?id=5">Photography</a></li>
							</ul>
					</li>
					<li>
						<a class="<?=$banquetActive?>" >Banquets</a>
							<ul class="dropdown">
								<li><a href="index.php?id=7">The Grand Hall</a></li>
								<li><a href="index.php?id=8">West Coast Lounge</a></li>
								<li><a href="index.php?id=9">Menu</a></li>
							</ul>
					</li>
				<li><a class="<?=$mediaActive?>" href="index.php?id=10">Media</a></li>
				<li><a class="<?=$reservationActive?>" href="index.php?id=11">Reservations</a></li>
				<li><a class="<?=$contactActive?>" href="index.php?id=12">Contact</a></li>
	 			</a>
			</ul>
	</div>
</nav> 



</body>
</html>