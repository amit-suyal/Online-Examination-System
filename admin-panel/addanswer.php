<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>
<div class="container col-md-6 col-lg-6 m-auto">
	<h1 class="p-5 bg-info mt-5 text-center">ADD ANSWER</h1>
	<form method="post" action="" enctype="">
		<div class="form-group">
			<label class="font-weight-bold">
				Ans_id
			</label>
			<input type="number" name="ans_id" placeholder="enter ans_id" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">
				Answer
			</label>
			<input type="text" name="answer" placeholder="enter answer" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">Answer_id</label>
			<input type="number" name="answer_id" placeholder="enter answer_id" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-success btn-lg d-block m-auto">

		<?php
		if(isset($_POST['submit']))
		{
			$ans_id=$_POST['ans_id'];
			$answer=$_POST['answer'];
			$answer_id=$_POST['answer_id'];

			if($answer!="" && $answer_id!="")
			{
				$query="INSERT INTO answers VALUES('$ans_id','$answer','$answer_id')";
				$exec=mysqli_query($con,$query);
				if($exec)
				{
					header('location:viewanswers.php');
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