<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$subjectid=$_GET['subjectid'];
?>
<div class="container">
	<?php
		$query="DELETE FROM subject_name WHERE id='$subjectid'";
		$data=mysqli_query($con,$query);
		if($data)
		{
			echo "deleted successfully";
			header('location:viewsubject.php');
		}
		else
		{
			echo "not deleted";
		}
	 ?>
</div>









<?php
include('footer.php');
?>