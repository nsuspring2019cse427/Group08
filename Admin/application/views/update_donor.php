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
	<?php foreach ($single_donor as $row): ?>	
	<form method="post" action="http://localhost/Project/Admin/main/update_donor_id1/">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	
	<label>Name:</label><br>
	<input type="text" name="name" value="<?php echo $row->name; ?>"><br><br>
	<label>Email :</label><br>
	<input type="text" name="email" value="<?php echo $row->email; ?>"><br><br>
	<label>Donate Type:</label><br>
	<input type="text" name="donate_type" value="<?php echo $row->donate_type; ?>"><br><br>
	<label>Donate Date:</label><br>
	<input type="text" name="donate_date" value="<?php echo $row->donate_date; ?>"><br><br>
	<input type="submit" id="submit" name="dsubmit" value="Update">
	</form>
	<?php endforeach; ?>
</div></div>
</body>
</html>