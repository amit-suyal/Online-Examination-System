<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$id_answer=$_GET['a_id'];
?>
<div class="container col-md-6 col-lg-6 m-auto">
	<h1 class="p-5 bg-info mt-5 text-center">UPDATE ANSWER</h1>
	<form method="post" action="" enctype="">
		<?php
		$query="SELECT * FROM answers WHERE ans_id='$id_answer'";
		$data=mysqli_query($con,$query);
		$fetch=mysqli_fetch_array($data);
		?>
		<div class="form-group">
			<label class="font-weight-bold">
				Ans_id
			</label>
			<input type="number" value="<?php echo $fetch['ans_id']; ?>" name="ans_id" placeholder="enter ans_id" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">
				Answer
			</label>
			<input type="text" value="<?php echo $fetch['answer']; ?>" name="answer" placeholder="enter answer" class="form-control">
			
		</div>
		<div class="form-group">
			<label class="font-weight-bold">Answer_id</label>
			<input type="number" value="<?php echo $fetch['answer_id']; ?>" name="answer_id" placeholder="enter answer_id" class="form-control">
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
				$query1="UPDATE  answers SET ans_id='$ans_id',answer='$answer',answer_id='$answer_id' WHERE ans_id='$id_answer'";
				$exec=mysqli_query($con,$query1);
				if($exec)
				{
					header('location:viewanswers.php');
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