<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Donor List Show</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div id="container">
	
	<h1>Donor  List Show</h1>

	<!--<?php echo var_dump($donor_list);?>-->
		<table align="center" border="4" >
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Donate Type</th>
					<th>Donate Date</th>
					<th>Edit/Delete</th>
					
				</thead>
				<tbody>
					
					<?php foreach($donor_list as $donarlist){
							?>
			<tr>
				
				<td><?php echo $donarlist['name'];?></td>
				<td><?php echo $donarlist['email'];?></td>
				<td><?php echo $donarlist['donate_type'];?></td>
				<td><?php echo $donarlist['donate_date'];?></td>
				<td><a href="show_donor_id/<?php echo $donarlist['id']; ?>">Edit</a>/<a href="delete_donor/<?php echo $donarlist['id']; ?>">Delete</a></td>
				
			</tr>
			<?php
					}
					?>	
			</tbody>		

			</table>
						
	
	<p><a href='<?php echo base_url()."main/donor_list";?>'>Back to Donor</a></p>
	<p><a href='<?php echo base_url()."main/members";?>'>Back to Admin Page</a></p>


	<p><a href= '<?php echo base_url()."main/logout";?>'>LogOut</a></p>

</div>

</body>
</html>