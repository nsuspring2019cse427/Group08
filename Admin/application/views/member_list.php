<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Member Pages</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div id="container">
	
	<h1>Member Pages</h1>
	

	<p><a href='<?php echo base_url()."main/member_view";?>'>View Member List</a></p>
	<p><a href='<?php echo base_url()."main/guardian_view";?>'>View Guardian List</a></p>
	<p><a href='<?php echo base_url()."main/member_add";?>'>Add New Member</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<a href= '<?php echo base_url()."main/logout";?>'>LogOut</a>

</div>

</body>
</html>