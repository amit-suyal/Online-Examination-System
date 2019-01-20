<?php
include('../db_config/connection.php'); 
include('header.php');
include('adminnav.php');
?>

<div class="container">
	<a href="addsubject.php" class="btn  btn-danger btn-lg m-5">Add Subject</a>
</div>

<div class="container table-responsive">
<table class="table table-hover table-bordered">

	<thead>
		
		<tr>
			<th>Sr no.</th>
			<th>Subject Name</th>
			<th class="" colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$query="select id,subjectname from subject_name";
		$data=mysqli_query($con,$query);
		
		while($fetch=mysqli_fetch_assoc($data))
		{
			?>
		<tr>
			<td><?php echo $fetch['id'];?></td>
			<td><?php echo $fetch['subjectname'];?></td>
			<td><a href="updatesubject.php?subjectid=<?php echo $fetch['id']; ?>" class="btn btn-success mr-2">Update</a><a href="deletesubject.php?subjectid=<?php echo
			$fetch['id'];  ?>" class="btn btn-danger">Delete</a></td>
		</tr>	
		
		<?php
		} 	
		?>
	</tbody>
	
</table>
</div>



<?php
include('footer.php');
?>