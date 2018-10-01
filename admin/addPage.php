<?php
include("partials/header.php");
?>
	<div id="dashboard">
				<a href="dashboard.php">Dashboard</a>
				<a href="pages.php">Pages</a>
				<a href="logout.php">Logout</a>
			</div>
<form method="post" action="savePage.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">

	<h1>Add A Page</h1>
	<label>Template</label>
		<select name="nTemplatesID">
			<?php
			$arrAllTemplates = runSelectSQL("SELECT * FROM templates");
			foreach($arrAllTemplates as $template)
			{
				echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
			}
			?>		
		</select><br/>
	<label class="requiredLabel">Page Title</label>
	<input type="text" placeholder="Enter Page Name" name="strTitle" class="requiredField" value=""/>

	<label>Heading:</label>
	<input type="text" placeholder="Enter Heading" name="strHeading" value=""/>

	<label>SubHeading</label>
	<input type="text" placeholder="Enter SubHeading" name="strSubHeading" value=""/>
	<label>Add Image</label>
	<input type="text" placeholder="Enter SubHeading" name="strSubHeading" value=""/>
	<label>Body</label><br>
	<textarea name="strBody" value="Enter Content"></textarea>

	<input type="submit" value="Add Page" class="submitBtn">
	<a href="pages.php" class="submitBtn">Cancel</a>
</form>

<?php
include("partials/footer.php");
?>