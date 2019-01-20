<?php
include('../db_config/connection.php');
session_start();
$myemail=$_SESSION['emailid'];
if($myemail==false)
{
 header('location:admin_login.php');
}
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<div class="container">
	<a href="index.php" class="navbar-brand bg-danger">DASHBOARD</a>
	<ul class="navbar-nav m-auto">
		<!-- <li class="nav-item"><a class="nav-link text-warning" href="viewsubject.php">View subject</a></li> -->
		<!-- <li class="nav-item"><a class="nav-link text-warning" href="">View test</a></li> -->
		<li class="nav-item"><a class="nav-link text-warning" href="viewanswers.php">View Answers</a></li>
		<li class="nav-item"><a class="nav-link text-warning" href="viewquestions.php">View question</a></li>
		<li class="nav-item"><a class="nav-link text-warning" href="viewuser.php">View user</a></li>
		<li class="nav-item"><a class="nav-link text-warning" href="add_admin.php">Add Admin</a></li>
	</ul>
	<ul class="navbar-nav ml-auto">
		
		<li class="nav-item"><a class="nav-link text-warning" href="logout.php">logout</a></li>
	</ul>
</div>
</nav>