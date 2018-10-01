<?php
include("partials/header.php");
$arrPages = runSelectSQL("SELECT * FROM pages WHERE id='".$_GET["id"]."'");
?>

<div id="editPages">
	<div id="dashboard">
				<a href="dashboard.php">Dashboard</a>
				<a href="pages.php">Pages</a>
				<a href="logout.php">Logout</a>
			</div>
		<h1>Edit Page</h1>
	<form method="post" enctype="multipart/form-data" action="updatePage.php?id=<?=$arrPages[0]['id']?>" onsubmit="return validateForm();">
		<label>Template:</label><br>
		<select name="nTemplatesID">
			<?php
			$arrAllTemplates = runSelectSQL("SELECT * FROM templates");
			foreach($arrAllTemplates as $template)
			{
				echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
			}
			?>
		</select><br><br>

		<label class="requiredLabel">Page Title:</label>
		<input type="text" class="requiredField" name="strTitle" value="<?=$arrPages[0]['strTitle']?>">

		<label>Heading:</label>
		<input type="text" name="strHeading" value="<?=$arrPages[0]['strHeading']?>"/>

		<label>SubHeading</label>
		<input type="text" placeholder="Enter SubHeading" name="strSubHeading" value="<?=$arrPages[0]['strSubHeading']?>"/>

		<label>Body Text</label><br>
		<textarea name="strBody"><?=$arrPages[0]['strBody']?></textarea>

		<input type="submit" value="Save Changes" class="submitBtn">
		<a href="pages.php" class="submitBtn">Cancel</a>
	</form>
</div>

<?php
include("partials/footer.php");
?>