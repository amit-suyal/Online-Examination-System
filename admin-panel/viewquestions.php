<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>

<div class="container">
	<a href="addquestion.php" class="btn btn-danger btn-lg m-5">Add Question</a>

	<div class="container table-responsive">
		<table class="table table-hover table-bordered">

			<thead>
				<tr>
					<th>Ques ID</th>
					<th>Question</th>
					<th>Answer_id</th>
					<th class="" colspan="2">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$query="select * from questions";
				$exec=mysqli_query($con,$query);
				
				while($fetch=mysqli_fetch_assoc($exec))
				{
				?>
				<tr>
					<td><?php echo $fetch['ques_id'];?></td>
					<td><?php echo $fetch['question'];?></td>
					<td><?php echo $fetch['answer_id'];?></td>
					<td><a href="updatequestion.php?q_id=<?php echo $fetch['ques_id']; ?>" class="btn btn-success">update</a><a href="deletequestion.php?q_id=<?php echo $fetch['ques_id'];?>" class="btn btn-danger">delete</a></td>
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













