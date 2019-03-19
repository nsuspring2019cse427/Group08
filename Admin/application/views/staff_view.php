<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Staff List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>

<div id="container">
	
	<h1>Staff List</h1>

	<!--<?php echo var_dump($staff);?>-->
		<table align="center" border="1" >
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Department ID</th>
					<th>Manager ID</th>
					<th>Position</th>
					<th>Join Date</th>
					<th>Edit/Delete</th>
					
				</thead>
				<tbody>
					
					<?php foreach($staff as $row){
							?>
			<tr>
				
				<td><?php echo $row['fname'].' '.$row['lname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['did'];?></td>
				<td><?php echo $row['mid'];?></td>
				<td><?php echo $row['position'];?></td>
				<td><?php echo $row['join_date'];?></td>
				<td><a href="show_staff_id/<?php echo $row['id']; ?>">Edit</a>/<a href="delete_staff/<?php echo $row['id']; ?>">Delete</a></td>
				
			</tr>
			<?php
					}
					?>	
			</tbody>		

		</table>
						
	
	<p><a href='<?php echo base_url()."main/staff_list";?>'>Back to Staff Page</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>