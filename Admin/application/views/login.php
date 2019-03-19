<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LogIn Page</title>

<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	<h1>Log In</h1>

	<?php
		
		echo form_open('main/login_validation');

		echo validation_errors();

		echo "<p>Email: ";
		echo form_input('email', $this->input->post('email'));
		echo "</p>";

		echo "<p>Password: ";
		echo form_password('password');
		echo "</p>";

		echo "<p>";
		echo form_submit('login_submit', 'Login');
		echo "</p>";


		echo form_close();

	?>

	<p><a href="http://localhost/Project/">Go Back</a></p>

</div>

</body>
</html>