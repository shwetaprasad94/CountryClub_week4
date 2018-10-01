<?php
$homeActive = "active";
include("partials/header.php");
$arrSlides = runSelectSQL("SELECT * FROM heroImages");
?>

<div class="slideShow">
		<?php
			foreach($arrSlides as $slide) {
		?>
				<img src="images/<?=$slide['strHeroImage']?>" class="homeSlider w3-animate-fading"/>
		<?php
		}
		?>
</div><!--slide show-->

<div class="homeHeading">
	<h1><?=$arrPageData[0]['strHeading']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="homeContent">
	<p><?=$arrPageData[0]['strBody']?>
	<hr>
	
</div><!--homeContent-->
<div class="homeHeading">
	<h1><?=$arrPageData[0]['strSubHeading']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="banquetOptions"><!--row-->
	<div class="column">
		<img src="images/<?=$arrPageData[0]['strImage1']?>" alt="Avatar" class="image">
		  <div class="overlay">
		    <a href="index.php?id=7"><div class="text">Grand Hall</div></a>
		  </div>
	</div>

	<div class="column">
		 <img src="images/<?=$arrPageData[0]['strImage2']?>" alt="Avatar" class="image">
		  <div class="overlay">
		     <a href="index.php?id=8"><div class="text">West Coast Lounge</div><
		  </div>
		<hr>
	</div>
</div>

