<?php
include('header.php');
include('db_config/connection.php');
session_start();
?>

<div class="container text-center mt-1 mb-1 text-danger bg-dark">
        <h2>WELCOME TO ONLINE QUIZ</h2>
        <h5 class="text-warning">WelCome to Online exam. This Site will provide the quiz for various subject of interest. You need to login for the take the online exam.</h5>
      </div>
      <div class="container text-center  mb-1">
          <h2>STUDENT LOGIN</h2>
          <!-- <i class="fas fa-user fa-4x"></i> -->
      </div>
      <div class="row  m-auto w-100">
        <div class="container m-auto p-3  ">
      <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 m-auto p-3 bg-info">
        
          <form class="" method="post" action="">
            <div class="form-group">
              <label class="font-weight-bold">Login userid:</label>
              <input type="text" class="form-control" name="user_name" placeholder="enter user id" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password:</label>
              <input type="password" class="form-control" name="password" placeholder="enter password" required>
            </div>
            <div class="form-group">
              
              <input type="submit" class="form-control btn btn-danger d-block m-auto"  name="submit" value="submit">
            </div>
            <div class="form-group">
              
              <a class="form-control btn btn-dark d-block m-auto" href="user_reg.php"   >New user ? click here</a>
              <a class="form-control btn btn-success mt-1" href="admin-panel/index.php">Admin-Login</a>
            </div>
            <?php
              if(isset($_POST['submit']))
              {
                $user_name=$_POST['user_name'];
                $password=$_POST['password'];
                if($user_name!='' && $password!='')
                {
                $query="SELECT * FROM user_reg WHERE user_name='$user_name' && password='$password'";
                $data=mysqli_query($con,$query);
                $rows=mysqli_num_rows($data);
                if($rows==1)
                {
                  $_SESSION['user_name']=$user_name;
                  header('location:loginwelcome.php');
                }

                  else
                  {
                    echo "details wrong";
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
    </div>
  </div>

      <?php
      include('footer.php');
      ?>