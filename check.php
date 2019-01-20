<?php
include('header.php');
include('db_config/connection.php');
include('usernav.php');
// session_start();
//  echo $user_name=$_SESSION['user_name'];
// if($user_name==false)
// {
// 	header('location:index.php');
// }

if(isset($_POST['submit']))
{
	if(!empty($_POST['checkradio']))
	{
		$count=count($_POST['checkradio']);
		echo "<div class='col-md-6 m-auto text-white bg-dark  text-center'><h1 class='p-5 mt-2'>Out of 5 ,You have Attempted ".$count." questions</h1></div>";
		$result=0;
		$i=1;
		$selected=$_POST['checkradio'];
		// print_r($selected);

		$query="select * from questions";
		$data= mysqli_query($con,$query);
		while ($rows=mysqli_fetch_array($data)) {

			// print_r($rows['answer_id']);

			$checked=$rows['answer_id']==$selected[$i];
			if($checked)
			{
			$result++;	
			}
			$i++;

		}
		  echo "<div class='col-md-6 m-auto text-white bg-warning  text-center'><h1 class='p-5 mt-2 mb-2'><br> Your total score is ".$result;"</h1></div>";
	}
}
$finalresult="INSERT into user values('','$user_name','5','$result')";
 $queryresult=mysqli_query($con,$finalresult);
?>
















