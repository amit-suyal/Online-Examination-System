<?php
error_reporting(0);
include('db_config/connection.php');
session_start();
$user_name=$_SESSION['user_name'];
if($user_name==false)
{
	header('location:index.php');
}

			$query="SELECT * FROM user_reg WHERE user_name='$user_name'";
			$data=mysqli_query($con,$query);
			$fetch=mysqli_fetch_assoc($data);
			

?>
<nav class="navbar navbar-expand-sm navbar-dark bg-secondary pt-4">
<div class="container ">
	<ul class="navbar-nav m-auto">
		<li class="nav-item"><a class="nav-link text-warning" href="loginwelcome.php">HOME</a></li>
		<!-- <li class="nav-item"><a class="nav-link text-warning" href="">PROFILE</a></li> -->
		<!-- <li class="nav-item"><a class="nav-link text-warning" href=""><img src="<?php echo $fetch['imgupload']; ?>" style="height: 50px; width: 50px;"></a></li> -->
		<li class="nav-item"><a class="nav-link text-warning" href="logout.php">LOGOUT</a></li>
	</ul>
</div>
	
	
</nav>