<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$question_id=$_GET['q_id'];
$query="DELETE FROM questions WHERE ques_id='$question_id'";
$data=mysqli_query($con,$query);
if($data)
{
	header('location:viewquestions.php');
}
else
{
	echo "Error in deleting";
}
?>
