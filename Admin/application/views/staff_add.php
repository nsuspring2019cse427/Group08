<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Staff</title>

	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div id="container">
	<h1>Add Staff</h1>

	

	<?php
		
		echo form_open('main/staff_validation');

		echo validation_errors();

		echo "<p>First Name*: ";
		echo form_input('fname',$this->input->post('fname'));
		echo "</p>";

		echo "<p>Last Name*: ";
		echo form_input('lname',$this->input->post('lname'));
		echo "</p>";

		echo "<p>Email*: ";
		echo form_input('email',$this->input->post('email'));
		echo "</p>";

		echo "<p>Department Id (If any): ";
		echo form_input('did',$this->input->post('did'));
		echo "</p>";

		echo "<p>Manager ID(If any): ";
		echo form_input('mid',$this->input->post('mid'));
		echo "</p>";
		echo "<p>Position (If any): ";
		echo form_input('position',$this->input->post('position'));
		echo "</p>";

		echo "<p>Join Date(yyyy-mm-dd)* : ";
		echo form_input('join_date',$this->input->post('join_date'));
		echo "</p>";

		echo "<p>";
		echo form_submit('signup_submit', 'Save');
		echo "</p>";


		echo form_close();

	?>

	<p><a href='<?php echo base_url()."main/staff_list";?>'>Back to Staff</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>



</div>

</body>
</html>