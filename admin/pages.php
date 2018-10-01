<?php
include("partials/header.php");
?>

<section id="pages">
			<div id="dashboard">
				<a href="dashboard.php">Dashboard</a>
				<a href="pages.php">Pages</a>
				<a href="logout.php">Logout</a>
			</div>
			<h1>Page List</h1>
		<div class="pageList1">
			<a href="addPage.php" class="addBtn">Add Page</a>
			<div id="addPage1">
				<?php
					include("partials/pageList.php");
				?>
			</div>
		</div>

</section>

<?php
include("partials/footer.php");
?>