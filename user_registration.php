<?php
include("connect.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
          footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: red;
color: white;
text-align: center;
}
</style>
</head>
<body>

<div class="container-fluid">
        <h2 class="text-center mx-3">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center" >
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email">
                    </div>

                    
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Confirm-password</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Enter your confirm-password" autocomplete="off" required="required" name="conf_user_password">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_mobile" class="form-label">Mobile number</label>
                        <input type="number" id="user_mobile" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" name="user_mobile">
                    </div>

                    <div>
                        <input type="submit" value="Register"  class="form-label " name="user_register">
                        <p>Already have an account? <a href="user_login.php">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
</div>
<footer>
<div class="bg-info p-3 text-center">
    <p>All rights resered © -- Designed by THOMAS CYRIL</p>
</div></footer>

<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'] ;
    $user_email=$_POST['user_email'] ;
    $user_password=$_POST['user_password'] ;
    $hashpassword = password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'] ;

    $user_mobile=$_POST['user_mobile'] ;
   //select query
   $select_query ="select * from `user_table` where user_name='$user_username' or user_email='$user_email'";
   $lo = mysqli_query($con,$select_query);$ros = mysqli_num_rows($lo);

   if($ros>0){
    echo "<script> alert('----user-already--Exist----')</script>";
   }

   else if($user_password != $conf_user_password){
    echo "<script> alert('----Password don't match----')</script>";
   }
   else{
    $que="insert into `user_table` (user_name,user_email,user_password,user_mobile) values
    ('$user_username','$user_email' , '$hashpassword',$user_mobile)";
 
 
    $f=mysqli_query($con,$que);
  if($f){
    echo "<script> alert('----user-Register----')</script>";
  }
  else
  {
     die(mysqli_error($con));
  }
}


}
?>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>