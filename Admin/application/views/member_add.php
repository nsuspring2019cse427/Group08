<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add New Member</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div id="container">
	<h1>Add New Member</h1>

	

	<?php
		
		echo form_open('main/member_validation');

		echo validation_errors();

		echo "<p>Member's ID*: ";
		echo form_input('id',$this->input->post('id'));
		echo "<br>(Enter number between 1-1000. If any error then Change it.)<br></p>";

		echo "<p>First Name*: ";
		echo form_input('fname',$this->input->post('fname'));
		echo "</p>";

		echo "<p>Last Name*: ";
		echo form_input('lname',$this->input->post('lname'));
		echo "</p>";

		echo "<p>Age*: ";
		echo form_input('age',$this->input->post('age'));
		echo "</p>";

		echo "<p>Sex*: ";
		echo form_input('sex',$this->input->post('sex'));
		echo "</p>";

		echo "<p>Join Date(yyyy-mm-dd)* : ";
		echo form_input('join_date',$this->input->post('join_date'));
		echo "</p>";
		
		echo "<p>Doctor's Id*: ";
		echo form_input('did',$this->input->post('did'));
		echo "</p>";


		echo "<p>Health Condition* : ";
		echo form_input('health_condition',$this->input->post('health_condition'));
		echo "</p>";

		echo "<br/><hr/><br/><h2>Guardian Details</h2>";		

		echo "<p>First Name*: ";
		echo form_input('gfname',$this->input->post('gfname'));
		echo "</p>";

		echo "<p>Last Name*: ";
		echo form_input('glname',$this->input->post('glname'));
		echo "</p>";


		echo "<p>Address* : ";
		echo form_input('gaddress',$this->input->post('gaddress'));
		echo "</p>";

		echo "<p>Email*: ";
		echo form_input('gemail',$this->input->post('gemail'));
		echo "</p>";

		
		echo "<p>Phone_Number*: ";
		echo form_input('gphone_number',$this->input->post('gphone_number'));
		echo "</p>";		

		echo "<p>Relationship*: ";
		echo form_input('grelationship',$this->input->post('grelationship'));
		echo "</p>";
		

		echo "<p style='Padding:10px;'>";
		echo form_submit('signup_submit', 'Save');
		echo "</p>";


		echo form_close();

	?>

	<p><a href='<?php echo base_url()."main/member_list";?>'>Back to Member</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>



</div>

</body>
</html>