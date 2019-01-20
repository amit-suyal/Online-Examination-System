<?php
include('header.php');
include('db_config/connection.php');
?>

<div class="container bg-dark mt-5 mb-5 p-3">
	<h2 class="bg-dark text-danger text-center ">REGISTRATION PAGE</h2>
	<h3 class="text-warning text-center">* Register here for free QUIZ</h3>
</div>
<div class="col-md-6 col-lg-6 m-auto">
	<div class="container bg-info p-5 mb-5">
		<form method="post" action="userwelcome.php" enctype="multipart/form-data">
			<div class="form-group">
				<label class="font-weight-bold">Login Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="enter login username" required>
			</div>
			
			<div class="form-group">
				<label class="font-weight-bold">Password</label>
				<input type="text" class="form-control" name="password" placeholder="enter password" required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Confirm Password</label>
				<input type="text" class="form-control" name="c_password" placeholder="confirm password" required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Name</label>
				<input type="text" class="form-control" name="name" placeholder="enter name" required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Address</label>
				<textarea class="form-control" name="address" placeholder="enter address" required></textarea>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">City</label>
				<input type="text" class="form-control" name="city" placeholder="enter your city" required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Mobile</label>
				<input type="text" class="form-control" name="mobile" placeholder="enter your mobile " required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Email</label>
				<input type="email" class="form-control" name="email" placeholder="enter your email" required>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Upload Image</label>
				<input type="file" class="form-control" name="uploadimg" placeholder="enter your email" required>
			</div><br>
			<div class="form-group">
				
				<input type="submit" class="btn btn-success btn-lg" value="Sign up"  name="submit">
				<a href="index.php" class="btn btn-danger btn-lg">user login</a>
			</div>
			

		</form>
	</div>
</div>







<?php
include('footer.php');
?>