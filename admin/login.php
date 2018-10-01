<?php
include("functions/dbqueries.php");

$arrUser = runSelectSQL("SELECT * FROM users WHERE strUserName='".$_POST["strUserName"]."' AND strPassword='".$_POST["strPassword"]."'")[0];

if ($arrUser)
{
	session_start();
	$_SESSION["loggedUserId"]=$arrUser["id"];
	
	header("location: dashboard.php");
} else {
	header("location: index.php?error=true");
}
?>