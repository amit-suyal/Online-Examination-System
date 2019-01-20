<<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
?>
<div class="container text-center">
	<h1 class="p-5 bg-info mt-5">ADD SUBJECT</h1>
	<form method="post" action="" enctype="" >
		<div class="form-group">
			<label class="font-weight-bold">Enter Subject Name:</label>
			<input type="text" class="form-control mt-2 mb-3" name="subject_name" placeholder="enter your subject name">
			<input type="submit" name="submit" value="Add" class="btn btn-success btn-lg">
		</div>
		<?php
		if(isset($_POST['submit']))
		{
			$subname=$_POST['subject_name'];
			if($subname!='')
			{
				$query="INSERT INTO subject_name VALUES('','$subname')";
				$data=mysqli_query($con,$query);
				if($data)
				{
					echo "subject added";
				}
				else
				{
					echo "subject not added";
				}
			}
			else	
			{
				echo "Fill all details";
			}
		}

		?>
	</form>
</div>



<?php
include('footer.php');
?>