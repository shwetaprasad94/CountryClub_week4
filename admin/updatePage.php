<?php
include_once("functions/dbqueries.php");
runSQL("
	UPDATE
		pages
	SET
		nTemplatesID = '".$_POST["nTemplatesID"]."',
		strTitle = '".$_POST["strTitle"]."',
		strHeading = '".$_POST["strHeading"]."',
		strSubheading = '".$_POST["strSubHeading"]."',
		strBodyText = '".$_POST["strBody"]."'
		WHERE id=".$_GET["id"]."");

header("location: pages.php");
?>