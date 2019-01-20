<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>

<div class="container">
	<a href="addanswer.php" class="btn btn-danger btn-lg m-5">Add Answer</a>

	<div class="container table-responsive">
		<table class="table table-hover table-bordered">

			<thead>
				<tr>
					<th>Ans ID</th>
					<th>Answer</th>
					<th>Answer_id</th>
					<th class="" colspan="2">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$query="select * from answers";
				$exec=mysqli_query($con,$query);
				
				while($fetch=mysqli_fetch_assoc($exec))
				{
				?>
				<tr>
					<td><?php echo $fetch['ans_id'];?></td>
					<td><?php echo $fetch['answer'];?></td>
					<td><?php echo $fetch['answer_id'];?></td>
					<td><a href="updateanswer.php?a_id=<?php echo $fetch['ans_id']; ?>" class="btn btn-success">update</a><a href="deleteanswer.php?a_id=<?php echo $fetch['ans_id']; ?>" class="btn btn-danger">delete</a></td>
				</tr>
				<?php
			}
				?>
			</tbody>
		</table>
    </div>
</div>














<?php
include('footer.php');
?>