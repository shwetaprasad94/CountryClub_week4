<?php
$reservationActive = "active";
include("partials/header.php");
?>


<div class="planningHeading">
	<h1><?=$arrPageData[0]['strHeading']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="grandHall">
	<img src="images/<?=$arrPageData[0]['strImage1']?>" alt="grandhall">
</div>

<div class="reservationContainer">
	
	 <div class="reservationDetails">
	<!---------------------CONTACT FORM---------------------------->
	<section id="reservation">
		<form method="post" >
			<label class="requiredLabel">Enter Name</label>
			<input type="text" name="strFirstName" id="strName" placeholder="ex. Jane Doe" class="requiredField" value="">

			<label class="requiredLabel">Enter Phone</label>
			<input type="text" name="strLastName" id="strLastName" placeholder="ex. +17787878787" class="requiredField" value="">

			<label class="requiredLabel">Enter Email</label>
			<input type="text" name="strEmail" id="strEmail" placeholder="ex. abc@gmail.com" class="requiredField" value="">

			<label class="requiredLabel">Enter The Date You Want to reserve</label>
			<input type="date" name="strEmail" class="requiredField" id="strDate"class="requiredField" value="">

			<label class="container">Grand Hall
				<input type="checkbox" checked="checked" class="requiredField">
				<span class="checkmark"></span>
			</label>

			<label class="container">West Coast Lounge
				<input type="checkbox">
				<span class="checkmark" class="requiredField"></span>
			</label>

			<label class="container">Both
				<input type="checkbox" class="requiredField">
				<span class="checkmark"></span>
			</label>

			<input type="submit" id="doAjax" name="submit" value="Submit" class="submitBtn" onClick="validateForm()" value="">
		</form>
	</section>
	</div>
</div>