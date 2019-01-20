<?php
include('header.php');
include('db_config/connection.php');
			if(isset($_POST['submit']))
			{
			    $user_name=$_POST['user_name'];
			    $password=$_POST['password'];
			    $c_password=$_POST['c_password'];
			    $name=$_POST['name'];
			    $address=$_POST['address'];
			    $city=$_POST['city'];
			    $mobile=$_POST['mobile'];
			    $email=$_POST['email'];
				
				$filename=$_FILES['uploadimg']['name'];
				$tempname=$_FILES['uploadimg']['tmp_name'];
				 $folder="img/".$filename;
				move_uploaded_file($tempname,$folder);

				if($user_name!=''&& $password!=''&& $c_password!=''&& $name!=''&& $address!=''&& $city!=''&& $mobile!=''&& $email!='' && $filename!='')
				{	
				
				if($password==$c_password)
				{
					$query="INSERT INTO user_reg VALUES('$user_name','$password','$name','$address','$city','$mobile','$email','$folder')";
					 $result=mysqli_query($con,$query);

					if($result)
					{
						echo "data submitted";
					}
					else
					{
						echo "data not submitted";
					}
				}
				else{
					echo " confirm your password";
				}
				}

				else{
					echo "Fill all records";
				}	
				
				
				
			}
			
?>
<div class="col-md-6 col-lg-6 m-auto">
	<div class="container text-center p-5">
		<h1>Welcome <?php echo $name=$_POST['name'] ?></h1>
		<h2>YOU are successfully registererd ! </h2>
		<a href="index.php" class="btn btn-success btn-lg">login</a>
	</div>
</div>

<?php
include('footer.php');
?>