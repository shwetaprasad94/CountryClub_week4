<?php
$banquetActive = "active";
include("partials/header.php");
?>

<div class="planningHeading">
	<h1><?=$arrPageData[0]['strTitle']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="foodMenu">
		
		<div class="card">
			<div class="foodHeading">
				<h1><?=$arrPageData[0]['strHeading']?></h1>
			</div><!--heading-->
			<img src="images/<?=$arrPageData[0]['strImage4']?>" alt="card">
			<p><?=$arrPageData[0]['strBody']?></p>
		</div><!--cake-->


		<div class="card1">
		<div class="foodHeading">
			<h1><?=$arrPageData[0]['strSubHeading']?></h1>
		</div><!--heading-->
		  <img src="images/<?=$arrPageData[0]['strImage1']?>" alt="card">
		  <p><?=$arrPageData[0]['strBody2']?></p>
		</div><!--main course-->


		<div class="card2">
		<div class="foodHeading">
			<h1><?=$arrPageData[0]['strSubHeading2']?></h1>
		</div><!--heading-->
		  <img src="images/<?=$arrPageData[0]['strImage3']?>" alt="card">
		  <p><?=$arrPageData[0]['strBody3']?></p>
		</div><!--drinks-->

		<div class="card3">
			<div class="foodHeading">
				<h1><?=$arrPageData[0]['strSubHeading3']?></h1>
			</div><!--heading-->
		  <img src="images/<?=$arrPageData[0]['strImage2']?>" alt="card">
		  <p><?=$arrPageData[0]['strBody4']?></p>
		</div><!--desserts-->
</div><!--FOOD MENU-->