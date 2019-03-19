<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add New Donor</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	<h1>Add New Donor</h1>

	

	<?php
		
		echo form_open('main/donor_validation');

		echo validation_errors();

		echo "<p>Name*: ";
		echo form_input('name',$this->input->post('name'));
		echo "</p>";

		
		
		echo "<p>Email*: ";
		echo form_input('email',$this->input->post('email'));
		echo "</p>";

		echo "<p>Donate Type*: ";
		echo form_input('donate_type',$this->input->post('donate_type'));
		echo "</p>";

		
		
		echo "<p>Donate Date*: ";
		echo form_input('donate_date',$this->input->post('donate_date'));
		echo "</p>";		


		

		echo "<p>";
		echo form_submit('signup_submit', 'Save');
		echo "</p>";


		echo form_close();

	?>

	<p><a href='<?php echo base_url()."main/donor_list";?>'>Back to Donor</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>



</div>

</body>
</html>