<?php
include('header.php');
include('db_config/connection.php');
include('usernav.php');
// session_start();
//  echo $user_name=$_SESSION['user_name'];
// if($user_name==false)
// {
// 	header('location:index.php');
// }


?>

<div class="container text-center bg-success text-white mt-3 p-2">
	<h2>Result</h2>
</div>
<div class="row m-auto w-100">
	<div class="col-md-6 col-lg-6 m-auto">
		<div class="container table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<th>user id</th>
					<th>user_name</th>
					<th>questions attempted</th>
					<th>totals score</th>
				</thead>
				<tbody>
					<?php
					$i=$user_name;
					$query="SELECT * from user where username='$i'";
					 $data=mysqli_query($con,$query);
					while($fetch=mysqli_fetch_array($data))
					{
					?>
					<tr>
						<td><?php echo $fetch['userid']; ?></td>
						<td><?php echo $fetch['username']; ?></td>
						<td><?php echo $fetch['totalques']; ?></td>
						<td><?php echo $fetch['answerscorrect']; ?></td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>

		</div>
	</div>
</div>













