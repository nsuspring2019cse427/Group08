<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Food Service Pages</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	
	<h1>Food Service Provider</h1>
	<p><a href='<?php echo base_url()."main/foodprovider_view";?>'>Show the List of Food Provider</a></p>
	<p><a href='<?php echo base_url()."main/foodprovider";?>'>Add New Food Provider</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>