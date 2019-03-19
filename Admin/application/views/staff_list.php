<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Staff Pages</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	
</head>
<body>

<div id="container" align="center">
	
	<h1>Staff Pages</h1>
	
	<p><a href='<?php echo base_url()."main/staff_view";?>'>View Staff List</a>
	<p><a href='<?php echo base_url()."main/staff_add";?>'>Add New Staff</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>