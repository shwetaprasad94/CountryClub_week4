<?php
include("partials/header.php");
?>

<div id="Container" >
		<?php
			if ($_GET["error"])
			{
				echo "<div class='loginError'>ERROR! ENTER VALID USER-ID AND PASSWORD!</div>";
			}
		?>
	<div id="loginForm">
		<form method="post" action="login.php">
			<input type="text" name="strUserName" placeholder="Enter UserName"><br>
			<input type="password" name="strPassword" placeholder="   Enter Password"><br>
			<input type="submit" name="Login" value = "Login" class="submitBtn">
		</form>
	</div>
</div><!---container-->


<?php
include("partials/footer.php");
?>