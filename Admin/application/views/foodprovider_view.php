<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Food Provider List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>

<div id="container">
	
	<h1>Food Sevice</h1>

	<!--<?php echo var_dump($foodprovider);?>-->
		<table align="center" border="1" >
				<thead>
					<th>Company Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Provided Food</th>
					<th>Edit/Delete</th>
					
				</thead>
				<tbody>
					
					<?php foreach($result as $row){
							?>
			<tr>
				
				<td><?php echo $row['company_name'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['Email'];?></td>
				<td><?php echo $row['phone_number'];?></td>
				<td><?php echo $row['provided_food'];?></td>
				<td><a href="show_foodprovider_id/<?php echo $row['id']; ?>">Edit</a>/<a href="delete_foodprovider/<?php echo $row['id']; ?>">Delete</a></td>
				
			</tr>
			<?php
					}
					?>	
			</tbody>		

		</table>
						
	
	<p><a href='<?php echo base_url()."main/foodprovider_list";?>'>Back to Food Service Provider</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>