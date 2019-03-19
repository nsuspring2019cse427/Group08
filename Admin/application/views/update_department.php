<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update list</title>


	<link rel="stylesheet" type="text/css" href=".../css/style.css">

</head>
<body>	

	<div id="container">
	

		<h1>Update Data</h1>
	
		<div id="container" style="margin:20px;padding:20px;">
	<?php foreach ($single_department as $row): ?>	
	<form method="post" action="http://localhost/Project/Admin/main/update_department_id1/">
	<input type="hidden" name="did" value="<?php echo $row->did; ?>">
	
	<label>Department Name:</label><br>
	<input type="text" name="d_name" value="<?php echo $row->d_name; ?>"><br><br>
	<label>Manager ID:</label><br>
	<input type="text" name="mid" value="<?php echo $row->mid; ?>"><br><br>
	<label>Department Phone:</label><br>
	<input type="text" name="department_phone" value="<?php echo $row->department_phone; ?>"><br><br>
	<label>Department Address:</label><br>
	<input type="text" name="department_address" value="<?php echo $row->department_address; ?>"><br><br>
	
	<input type="submit" id="submit" name="dsubmit" value="Update">
	</form>
	<?php endforeach; ?>
</div></div>
</body>
</html>