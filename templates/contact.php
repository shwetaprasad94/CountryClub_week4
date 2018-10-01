<?php
$contactActive = "active";
include("partials/header.php");
?>

<div class="planningHeading">
	<h1><?=$arrPageData[0]['strTitle']?></h1>
</div><!--heading-->

<div class="floral">
	<img src="images/floral.png" alt="floral border">
</div><!--floral-->

<div class="contactContainer">
	
	 <div class="contactDetails">
	<!---------------------CONTACT FORM---------------------------->
	<section id="contact">
		<form method="post" action="saveContact.php">
			<label class="requiredLabel">Enter Name</label>
			<input type="text" name="strName" id="strName" placeholder="ex. Jane Doe" class="requiredField" value="">
			<label class="requiredLabel">Enter Phone</label>
			<input type="text" name="strLastName" id="strPhone" placeholder="ex. +17787878787" class="requiredField" value="">
			<label class="requiredLabel">Enter Email</label>
			<input type="text" name="strEmail" id="strEmail" placeholder="ex. abc@gmail.com" class="requiredField" value="">
			<label class="requiredLabel">Enter Message</label>
			<input type="text" name="strMessage" id="strMessage" placeholder="Any Specific requirements.." class="requiredField">
			<input type="submit" id="doAjax" name="submit" value="Submit" class="submitBtn" onClick="validateForm()" value="">
		</form>
	</section>
	</div><!--contact details-->
</div><!--contact Container-->

<div id="office">
	<h3>Address</h3>
	<div class="floral">
		<img src="images/floral.png" alt="floral border">
	</div><!--floral-->
	<p><?=getGlobalValue("strWebsite")?><br>
	<?=getGlobalValue("strAddress")?><br>
	<?=getGlobalValue("strPhoneNumber")?></p>
</div><!--office-->