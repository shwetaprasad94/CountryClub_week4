<?php
include_once("functions/dbqueries.php");
$page = (isset($_GET["id"]))?$_GET["id"]:1;

$arrPageData = runSelectSQL("SELECT pages.*, templates.strFilePath FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesID WHERE pages.id='".$page."' LIMIT 0,1");


$template = "templates/".$arrPageData[0]["strFilePath"];

if(file_exists($template))
{	
	include($template);

} else {
	echo "Error: No file found";
}
include("partials/footer.php");
?>

