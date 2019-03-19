<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Donor Pages</title>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	
	<h1>Donor Pages</h1>

	<a href='<?php echo base_url()."main/donor_view";?>'>View List of  Donor</a><br/>
	<a href='<?php echo base_url()."main/donor_add";?>'>Add New Donor</a><br/>
	<a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a><br/>


	<a href= '<?php echo base_url()."main/logout";?>'>LogOut</a>

</div>

</body>
</html>