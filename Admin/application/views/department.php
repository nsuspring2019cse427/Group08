<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Department</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>

	
</head>
<body>

<div class="container">
	<h1>Add New Department</h1>

	

	<?php
		
		echo form_open('main/department_validation');

		echo validation_errors();

		echo "<p>Department_name*: ";
		echo form_input('department_name',$this->input->post('department_name'));
		echo "</p>";

		echo "<p>manager_id*: ";
		echo form_input('manager_id',$this->input->post('manager_id'));
		echo "</p>";
		echo "<p>Department Phone*: ";
		echo form_input('department_phone',$this->input->post('department_phone'));
		echo "</p>";
		echo "<p>Address*: ";
		echo form_input('department_address',$this->input->post('department_address'));
		echo "</p>";

		

		echo "<p>";
		echo form_submit('signup_submit', 'Save');
		echo "</p>";


		echo form_close();

	?>

	<a href='<?php echo base_url()."main/department_list";?>'>Back to Department</a><br/>
	<a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a><br/>



</div>

</body>
</html>