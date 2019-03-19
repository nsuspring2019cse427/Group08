<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Member List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>

<div id="container">
	
	<h1>All Member</h1>

	<!--<?php echo var_dump($dmember);?>-->
		<table align="center" border="1" >
				<thead>
					<th>Member's ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Join Date</th>
					<th>Doctor's ID: </th>
					<th>Guardian's ID</th>
					<th>Health Condition</th>
					<th>Edit/Delete</th>
					
				</thead>
				<tbody>
					
					<?php foreach($member as $row){
							?>
			<tr>
				
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['sex'];?></td>
				<td><?php echo $row['join_date'];?></td>
				<td><?php echo $row['did'];?></td>
				<td><?php echo $row['gid'];?></td>
				<td><?php echo $row['health_condition'];?></td>
				<td><a href="show_member_id/<?php echo $row['id']; ?>">Edit</a>/<a href="delete_member/<?php echo $row['id']; ?>">Delete</a></td>
				
			</tr>
			<?php
					}
					?>	
			</tbody>		

		</table>
						
	
	<p><a href='<?php echo base_url()."main/member_list";?>'>Back to Member</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>