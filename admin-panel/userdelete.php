<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$userdelete=$_GET['userdelete'];
?>
<div class="container">
	<?php
		$query="DELETE FROM user_reg WHERE user_name='$userdelete'";
		$data=mysqli_query($con,$query);
		if($data)
		{
			echo "deleted";
			header('location:viewuser.php');
		}
		else{
			echo "not deleted";
		}
	?>
</div>