<?php
include_once("functions/dbqueries.php");
$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Country Clubs Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
</head>
<body>

<section id="logo">
	<img src="images/logo.png">
</section>