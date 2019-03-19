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
	<?php foreach ($single_staff as $row): ?>	
	<form method="post" action="http://localhost/Project/Admin/main/update_staff_id1/">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	
	<label>Employee Id: </label><?php echo "<b><i>".$row->id."</i></b>"; ?><br><br>
	<label>First Name:</label><br>
	<input type="text" name="fname" value="<?php echo $row->fname; ?>"><br><br>
	<label>Last Name:</label><br>
	<input type="text" name="lname" value="<?php echo $row->lname; ?>"><br><br>
	<label>Email :</label><br>
	<input type="text" name="email" value="<?php echo $row->email; ?>"><br><br>
	<label> Department Id:</label><br>
	<input type="text" name="did" value="<?php echo $row->did; ?>"><br><br>
	<label> Manager Id:</label><br>
	<input type="text" name="mid" value="<?php echo $row->mid; ?>"><br><br>
	<label> Position Id:</label><br>
	<input type="text" name="position" value="<?php echo $row->position; ?>"><br><br>
	<label>Join Date :</label><br>
	<input type="text" name="join_date" value="<?php echo $row->join_date; ?>"><br><br>
	<input type="submit" id="submit" name="dsubmit" value="Update">
	</form>
	<?php endforeach; ?>
</div></div>
</body>
</html>