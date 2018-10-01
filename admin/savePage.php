<?php
include("functions/dbqueries.php");

$sql = "INSERT INTO pages (
		nTemplatesID,
		strTitle, 
		strHeading,
		strSubHeading,
		strBody
		) 

	VALUES (
		'".$_POST["nTemplatesID"]."',
		'".$_POST["strTitle"]."', 
		'".$_POST["strHeading"]."',
		'".$_POST["strSubHeading"]."',
		'".$_POST["strBody"]."'
		
	)";

	runInsertSQL($sql);
	header("location: pages.php");
?>
