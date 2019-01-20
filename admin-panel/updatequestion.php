<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$question_id=$_GET['q_id'];
?>
<div class="container col-md-6 col-lg-6 m-auto">
	<h1 class="p-5 bg-info mt-5 text-center">UPDATE QUESTION</h1>
	<form method="post" action="" enctype="">
		<?php
		$query="SELECT * FROM questions WHERE ques_id='$question_id'";
		$data=mysqli_query($con,$query);
		$fetch=mysqli_fetch_array($data);
		?>
		<div class="form-group">
			<label class="font-weight-bold">
				ques_id
			</label>
			<input type="number" value="<?php echo $fetch['ques_id'] ?>" name="ques_id" placeholder="enter ques_id" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">
				Question
			</label>
			<input type="text" value="<?php echo $fetch['question'] ?>" name="question" placeholder="enter question" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">Answer_id</label>
			<input type="number" value="<?php echo $fetch['answer_id'] ?>" name="answer_id" placeholder="enter answer_id" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-success btn-lg d-block m-auto">

		<?php
		if(isset($_POST['submit']))
		{
			$ques_id=$_POST['ques_id'];
			$question=$_POST['question'];
			$answer_id=$_POST['answer_id'];

			if($ques_id!="" && $question!="" && $answer_id!="")
			{
				$query="UPDATE questions SET ques_id='$ques_id', question='$question', answer_id='$answer_id' WHERE ques_id='$question_id'";
				$exec=mysqli_query($con,$query);
				if($exec)
				{
					echo "Data Updated";
				}
				else
				{
					echo "Not Updated";
				}
			}
			else
			{
				echo "Fill all the Details";
			}
		}

		?>
		
	</form>
</div>

<?php
include('footer.php');
?>