<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup Page</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	<h1>Sign Up</h1>

	

	<?php
		
		echo form_open('main/signup_validation');

		echo validation_errors();

		echo "<p>First Name*: ";
		echo form_input('fname',$this->input->post('fname'));
		echo "</p>";

		echo "<p>LastName*: ";
		echo form_input('lname',$this->input->post('lname'));
		echo "</p>";

		echo "<p>Email*: ";
		echo form_input('email',$this->input->post('email'));
		echo "</p>";

		echo "<p>Password*: ";
		echo form_password('password');
		echo "</p>";

		echo "<p>Confirm Password*: ";
		echo form_password('cpassword');
		echo "</p>";

		echo "<p>";
		echo form_submit('signup_submit', 'SignUp');
		echo "</p>";


		echo form_close();

	?>

	<a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a><br/>



</div>

</body>
</html>