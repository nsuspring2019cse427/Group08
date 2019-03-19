<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Pages</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	
	<h1>Admin Control Pages</h1>

	<p><a href='<?php echo base_url()."main/department_list";?>'>Department</a></p>

	<p><a href='<?php echo base_url()."main/staff_list";?>'>Staff</a></p>
	
	<p><a href='<?php echo base_url()."main/member_list";?>'>Member</a></p>

	<p><a href='<?php echo base_url()."main/donor_list";?>'>Donor</a></p>

	<p><a href='<?php echo base_url()."main/foodprovider_list";?>'>Food Provider</a></p>

	<p><a href='<?php echo base_url()."main/signup";?>'>Sign Up for New Admin</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>