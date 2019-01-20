<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>
<div class="container col-md-6 col-lg-6 m-auto">
	<h1 class="p-5 bg-info mt-5 text-center">ADD QUESTION</h1>
	<form method="post" action="" enctype="">
		<div class="form-group">
			<label class="font-weight-bold">
				ques_id
			</label>
			<input type="number" name="ques_id" placeholder="enter ques_id" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">
				Question
			</label>
			<input type="text" name="question" placeholder="enter question" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">Answer_id</label>
			<input type="number" name="answer_id" placeholder="enter answer_id" class="form-control">
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
				$query="INSERT INTO questions VALUES('$ques_id','$question','$answer_id')";
				$exec=mysqli_query($con,$query);
				if($exec)
				{
					echo "Data submitted";
				}
				else
				{
					echo "Not submitted";
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