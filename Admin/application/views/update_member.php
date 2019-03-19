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
		<h1>Member</h1>
	<?php foreach ($single_member as $row): ?>	
	<form method="post" action="http://localhost/Project/Admin/main/update_member_id1/">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	
	<label>First Name:</label><br>
	<input type="text" name="fname" value="<?php echo $row->mfname; ?>"><br><br>
	<label>Last Name:</label><br>
	<input type="text" name="lname" value="<?php echo $row->mlname; ?>"><br><br>
	<label>Age:</label><br>
	<input type="text" name="age" value="<?php echo $row->mage; ?>"><br><br>
	<label>Sex:</label><br>
	<input type="text" name="sex" value="<?php echo $row->msex; ?>"><br><br>
	<label>Join Date:</label><br>
	<input type="text" name="join_date" value="<?php echo $row->mjdate; ?>"><br><br>
	<label>Doctor's ID:</label><br>
	<input type="text" name="did" value="<?php echo $row->mdid; ?>"><br><br>
	<label>Health Condition:</label><br>
	<input type="text" name="health_condition" value="<?php echo $row->mhealth_condition; ?>"><br><br>
	
	<h1>Guardian</h1>
	<label>First Name:</label><br>
	<input type="text" name="gfname" value="<?php echo $row->gfname; ?>"><br><br>
	<label>Last Name:</label><br>
	<input type="text" name="glname" value="<?php echo $row->glname; ?>"><br><br>
	<label>Address:</label><br>
	<input type="text" name="gaddress" value="<?php echo $row->gaddress; ?>"><br><br>
	<label>Email:</label><br>
	<input type="text" name="gemail" value="<?php echo $row->gemail; ?>"><br><br>
	<label>Phone Number:</label><br>
	<input type="text" name="gphone_number" value="<?php echo $row->gphone_number; ?>"><br><br>
	<label>Relationship:</label><br>
	<input type="text" name="grelationship" value="<?php echo $row->grelationship; ?>"><br><br>

	<input type="submit" id="submit" name="dsubmit" value="Update">
	</form>
	<?php endforeach; ?>
</div></div>
</body>
</html>