<?php
include("partials/header.php");
$arrUsers = runSelectSQL("SELECT * FROM users");
?>

<div id="welcomePage">
		<h1>Hello, <?=$arrUsers[0]["strFullName"]?>!</h1>
		<div id="dashboard">
				<a href="dashboard.php">Dashboard</a>
				<a href="pages.php">Pages</a>
				<a href="logout.php">Logout</a>
		</div>
</div>

<?php
include("partials/footer.php");
?>