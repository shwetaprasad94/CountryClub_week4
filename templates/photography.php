<?php
$weddingActive = "active";
$arrphoto = runSelectSQL("SELECT * FROM photography");
include("partials/header.php");
?>

<div class="photoHeading">
	<h1><?=$arrPageData[0]['strHeading']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="wed3">
	<p><?=$arrPageData[0]['strBody']?></p>
</div>

<div class="photoRow">
	<div class="photoColumn">
<?php
	foreach($arrphoto as $photo) {
?>
		<img src="images/<?=$photo['strImagePath']?>" alt="photography"/>
<?php
}
?>
	</div>
	
</div>