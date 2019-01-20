<?php
include('header.php');
include('db_config/connection.php');
include('usernav.php');

?>
<div class="container mt-3 mb-3 ">
	<h3 class="p-4 text-center bg-info text-white">Best of luck bro :)</h3>
</div>
<div class="row w-100 m-auto">
	<div class="col-md-6 col-lg-6 m-auto">

		
			<form method="post" action="check.php">
				<?php
				for($i=1;$i<6;$i++)
				{
				$q="SELECT * from questions where ques_id='$i'";
				$exec=mysqli_query($con,$q);
				
				while($fetch=mysqli_fetch_assoc($exec))
				{
				?>
				<div class="card mb-2">
					
		<div class="card-header p-3">
			<h4><?php echo $fetch['ques_id'];?>. <?php echo $fetch['question'];?></h4>
		</div>
		<?php
				$query="SELECT * from answers where answer_id='$i'";
				$data=mysqli_query($con,$query);
				
				while($fetch1=mysqli_fetch_assoc($data))
				{
				?>
		<div class="card-body">
		<div class="form-check">
		<input type="radio" name="checkradio[<?php echo $fetch1['answer_id'];?>]" value="<?php echo $fetch1['ans_id'];  ?>" class="form-check-input radio"><label class="form-check-label"><?php echo $fetch1['answer'];?></label>
	    </div>
	    
	    </div>
	    <?php
	}
	    ?>
	    
		
		</div>
		<?php
	    }
	    }
	
	    ?>
	    <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg d-block m-auto">
	   </form>
		</div>
	        
	       
		

	</div>
</div>


<?php
include("footer.php");
?>