<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Department List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>

<div id="container">
	
	<h1>All Department</h1>

	<!--<?php echo var_dump($department);?>-->
		<table align="center" border="1" >
				<thead>
					<th>Department ID</th>
					<th>Department Name</th>
					<th>Manager Id</th>
					<th>Department Phone</th>
					<th>Department Address</th>
					<th>Edit</th>
					
				</thead>
				<tbody>
					
					<?php foreach($department as $row){
							?>
			<tr>
				
				<td><?php echo $row['did'];?></td>
				<td><?php echo $row['d_name'];?></td>
				<td><?php echo $row['mid'];?></td>
				<td><?php echo $row['department_phone'];?></td>
				<td><?php echo $row['department_address'];?></td>
				<td><a href="show_department_id/<?php echo $row['did']; ?>">Edit</a></td>
				
			</tr>
			<?php
					}
					?>	
			</tbody>		

		</table>
						
	
	<p><a href='<?php echo base_url()."main/department_list";?>'>Back to Department</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>