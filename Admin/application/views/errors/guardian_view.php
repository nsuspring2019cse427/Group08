<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Guardian List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>

<div id="container">
	
	<h1>All Guardian</h1>

	<?php echo var_dump($guardian);?>
		<!--<table align="center" border="1" >
				<thead>
					<th>guardian's ID</th>
					<th>Member's Name</th>
					<th>Guardian"s name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Relationship</th>
					
					<th>Edit</th>
					
				</thead>
				<tbody>
					
					<?php foreach($guardian as $row){
							?>
			<tr>
				
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['m_fname'].' '.$row['m_lname'];?></td>
				<td><?php echo $row['g_fname'].' '.$row['g_lname'];?></td>
				<td><?php echo $row['g_address'];?></td>
				<td><?php echo $row['g_email'];?></td>
				<td><?php echo $row['g_phone_number'];?></td>
				<td><?php echo $row['g_relationship'];?></td>
				<td><a href="show_member_id/<?php echo $row['id']; ?>">Edit</a>
			</tr>
			<?php
					}
					?>	
			</tbody>		

		</table>
				-->		
	
	<p><a href='<?php echo base_url()."main/member_list";?>'>Back to Member</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>