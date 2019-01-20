<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>

<div class="container text-center mt-5 mb-5 bg-info">
	<h1>Registered user details</h1>
</div>

<div class="container table-responsive">
	<table class="table table-hover table-bordered">
		<thead>
		<th>User Name</th>
		<th>Name</th>
		<th>Address</th>
		<th>City</th>
		<th>Mobile</th> 
		<th>Email</th>
		<th>Display pic</th>
		<th colspan="2">Action</th> 
		</thead>

		<tbody>
			<?php
			$query="select user_name,name,address,city,mobile,email,imgupload from user_reg";
			$data=mysqli_query($con,$query);
			
			while($fetch=mysqli_fetch_assoc($data))
			{
			?>
			<tr>
				<td><?php echo $fetch['user_name']; ?></td>
				
				<td><?php echo $fetch['name']; ?></td>
				<td><?php echo $fetch['address']; ?></td>
				<td><?php echo $fetch['city']; ?></td>
				<td><?php echo $fetch['mobile']; ?></td>
				<td><?php echo $fetch['email']; ?></td>
				<td><img src="<?php echo $fetch['imgupload'];  ?>" style
					="height: 100px;width:100px;"></td>
					<td><a href="userdelete.php?userdelete=<?php echo $fetch['user_name']; ?>" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>








<?php
include('footer.php');
?>