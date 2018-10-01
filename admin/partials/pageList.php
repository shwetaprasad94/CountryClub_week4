<?php
include_once("functions/dbqueries.php");
$arrPages = runSelectSQL("SELECT * FROM pages");
?>
	<div class="pageList">
		<div>
			<?php
			foreach($arrPages as $page)
			{
			?>
			<div>
				<a class="editBtn" href="editPage.php?id=<?=$page['id']?>">Edit</a><a class="deleteBtn" href="deletePage.php?id=<?=$page['id']?>">Delete</a><?=$page['strTitle']?>
		</div>
	<?php

	}

	?></div>

	
