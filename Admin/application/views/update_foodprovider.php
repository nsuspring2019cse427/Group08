<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update list</title>


	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>	

	<div id="container">
	

		<h1>Update Data</h1>
	
		<div id="container" style="margin:20px;padding:20px;">
	<?php foreach ($single_provider as $row): ?>	
	<form method="post" action="http://localhost/Project/Admin/main/update_foodprovider_id1/">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	
	<label>Company Name:</label><br>
	<input type="text" name="company_name" value="<?php echo $row->company_name; ?>"><br><br>
	<label>Address :</label><br>
	<input type="text" name="address" value="<?php echo $row->address; ?>"><br><br>
	<label>Email :</label><br>
	<input type="text" name="Email" value="<?php echo $row->Email; ?>"><br><br>
	<label>Phone Number :</label><br>
	<input type="text" name="phone_number" value="<?php echo $row->phone_number; ?>"><br><br>
	<label>Provided Food :</label><br>
	<input type="text" name="provided_food" value="<?php echo $row->provided_food; ?>"><br><br>
	<input type="submit" id="submit" name="dsubmit" value="Update">
	</form>
	<?php endforeach; ?>
</div></div>
</body>
</html>