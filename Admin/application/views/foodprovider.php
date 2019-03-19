<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Food Provider</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	<h1>Sign Up For Food Service Provider</h1>
	
	

	<?php
		
		echo form_open('main/food_provide_validation');

		echo validation_errors();

		echo "<p>Company Name*: ";
		echo form_input('company_name',$this->input->post('company_name'));
		echo "</p>";

		echo "<p>Address*: ";
		echo form_input('address',$this->input->post('address'));
		echo "</p>";

		echo "<p>Email*: ";
		echo form_input('email',$this->input->post('email'));
		echo "</p>";

		echo "<p>Phone Number*: ";
		echo form_input('phone_number',$this->input->post('phone_number'));
		echo "</p>";

		echo "<p>Provided Food*: ";
		echo form_input('provided_food',$this->input->post('provided_food'));
		echo "</p>";

		echo "<p>";
		echo form_submit('signup_submit', 'Save');
		echo "</p>";


		echo form_close();

	?>
	<p><a href='<?php echo base_url()."main/foodprovider_list";?>'>Back Food Provider</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p><br/>



</div>

</body>
</html>