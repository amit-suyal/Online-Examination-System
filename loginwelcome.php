<?php
include('header.php');
include('usernav.php');
include('db_config/connection.php');
// session_start();
// $user_name=$_SESSION['user_name'];
// if($user_name==false)
// {
// 	header('location:index.php');
// }
?>
<div class="col-md-6 col-lg-6 m-auto">
	<div class="container text-center mt-5 mb-5 pt-2">
		<?php
			$query="SELECT * FROM user_reg WHERE user_name='$user_name'";
			$data=mysqli_query($con,$query);
			$fetch=mysqli_fetch_assoc($data);
			
		?>
		<h1><span><img class="rounded-circle"src="<?php echo $fetch['imgupload']; ?>" style="height: 50px; width: 50px;"></span>WELCOME TO ONLINE EXAM <?php echo $fetch['name']; ?></h1>
		

		
		<a href="subject_quiz.php" class="btn btn-danger btn-lg mt-5">Give Exam</a><br>
		<a href="result.php" class="btn btn-warning btn-lg mt-5">Result</a>		
	</div>5
</div> p-


<?php
include('footer.php');
?>