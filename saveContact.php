<?php
include("functions/dbqueries.php");

$error = ($_POST["strName"] && $_POST["strEmail"] && $_POST["strMessage"])?false:true;


$sql = "INSERT INTO contact (
		strName, 
		strPhone,
		strEmail,
		strMessage
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["strPhone"]."',
		'".$_POST["strEmail"]."',
		'".$_POST["strMessage"]."'
		
	)";

	runInsertSQL($sql);
	header("location: index.php?id=13");
?>
