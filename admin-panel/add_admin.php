<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>
<div class="container m-auto">
	<h3 class="bg-warning text-center p-2 mt-2 mb-2">Add Admin</h3>
</div>
<div class="row w-100  m-auto">
	<div class="col-md-5 col-lg-5 m-auto">
		<div class="container bg-info m-auto p-5">
			<form method="post" action="">
				<div class="form-group">
					<label class="font-weight-bold">Name:</label>
					<input type="name" name="admin_name" placeholder="enter Name" class="form-control">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Email:</label>
					<input type="email" name="email" placeholder="enter email" class="form-control">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Password:</label>
					<input type="password" name="password" placeholder="enter password" class="form-control">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Confirm Password:</label>
					<input type="password" name="con_password" placeholder="confirm your password" class="form-control">
				</div>
				
					<div class="form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg d-block m-auto">
				    </div>
				<?php
				if(isset($_POST['submit']))
				{
					$admin_name=$_POST['admin_name'];
					$email=$_POST['email'];
					$password=$_POST['password'];
					$date=date('d/m/y');
					$time=time('h:m:s');
					$con_password=$_POST['con_password'];
					if($admin_name!="" && $email!="" && $password!="" && $con_password )
					{
						if($con_password=$password)
					{
						$query="INSERT INTO admin_reg VALUES('$admin_name','$email','$password','$date','$time')";
						$data=mysqli_query($con,$query);

						if($data)
						{
							echo "Data submitted";
						}
						else
						{
							echo "Data not submitted";
						}
					}
					else{

						echo "Please confirm the password";

					}
					}

					else
					{
						echo "Fill all details";
					}
					

				}
				?>
			</form>
		</div>
	</div>
</div>




<?php
include('footer.php');
?>