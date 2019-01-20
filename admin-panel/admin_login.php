<?php
include("../db_config/connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>usa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-dark p-5">
<div class="row w-100 p-5">
	<div class="col-sm-8 col-xs-8 col-md-5 col-lg-5 m-auto">
		<div class="container bg-success p-5">
			<h3 class="text-center font-weight-bold">ADMIN LOGIN</h3>
			<form method="post" action="">
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email" name="email" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
				</div>
				<input type="submit" class="btn btn-dark d-block m-auto btn-lg" name="submit" value="Submit">

				<?php
				if(isset($_POST['submit']))
				{
					$email=$_POST['email'];
					$password=$_POST['password'];

					$query="SELECT * from admin_reg where email_id='$email' && password='$password'";
					$data=mysqli_query($con,$query);
					$rows=mysqli_num_rows($data);
					if($rows==1)
					{
						
						$_SESSION['emailid']=$email;
						header('location:index.php');
					}
					else
					{
						echo "No user registered";
					}
				}
				?>

			</form>
			
		</div>
	</div>
</div>
</body>
</html>