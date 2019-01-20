<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$subjectid=$_GET['subjectid'];
?>
<div class="container text-center">
	<h1 class="p-5 bg-info mt-5">UPDATE SUBJECT</h1>
	<form method="post" action="" enctype="" >
		<?php
		$query="select * from subject_name where id='$subjectid'";
		$data=mysqli_query($con,$query);
		$fetch=mysqli_fetch_assoc($data);
		?>
		<div class="form-group">

			<label class="font-weight-bold">Enter Subject Name:</label>
			<input type="text" value="<?php echo $fetch['subjectname'] ?>" class="form-control mt-2 mb-3" name="subject_name" placeholder="enter your subject name">
			<input type="submit" name="submit" value="UPDATE" class="btn btn-success btn-lg">
		</div>
		<?php
		if(isset($_POST['submit']))
		{
			$subname=$_POST['subject_name'];
			if($subname!='')
			{
				$query1="UPDATE subject_name SET subjectname ='$subname' WHERE id='$subjectid'";
				$data1=mysqli_query($con,$query1);
				if($data1)
				{
					echo "subject updated";

					?> 
					<!-- <meta http-equiv="refresh" content="0;url='updatesubject.php'">  -->
					<?php
				}
				else
				{
					echo "subject not updated";
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