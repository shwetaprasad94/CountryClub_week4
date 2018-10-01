<?php
$weddingActive = "active";
include("partials/header.php");
?>

<div class="cateringHeading">
	<h1><?=$arrPageData[0]['strHeading']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="catering">
	<div class="wed2">
		<img src="images/<?=$arrPageData[0]['strImage1']?>" alt="Avatar" class="wedding1">
		<p><?=$arrPageData[0]['strBody']?></p>
	</div>

	<div class="wed2">
		<img src="images/<?=$arrPageData[0]['strImage2']?>" alt="Avatar" class="wedding1">
		<p><?=$arrPageData[0]['strBody2']?></p>
	</div>


	<div class="wed2">
		<img src="images/<?=$arrPageData[0]['strImage3']?>" alt="Avatar" class="wedding1">
		<p><?=$arrPageData[0]['strBody3']?></p>
	</div>

	<div class="wed2">
		<img src="images/<?=$arrPageData[0]['strImage4']?>" alt="Avatar" class="wedding1">
		<p><?=$arrPageData[0]['strBody4']?></p>
	</div>
</div>