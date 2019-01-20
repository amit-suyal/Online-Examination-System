<?php
include('../db_config/connection.php');
include('header.php');
include('adminnav.php');
$id_answer=$_GET['a_id'];
$query="DELETE FROM answers WHERE ans_id='$id_answer'";
$data=mysqli_query($con,$query);
if($data)
{
	header('location:viewanswers.php');
}
else
{
	echo "Error in deleting";
}
?>
