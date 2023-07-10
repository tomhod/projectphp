

<!DOCTYPE html>
<html>
    
<head>
 <title>Bootstrap Login Form |</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
<body class="bg-secondary">
<div class="login-form text-center">
 <form action="" method="POST">
    <h1 class="text-center mx-3 text-danger">Log-in</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="username" autocomplete="nope" name="username">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
      </div><hr>
    </div>
    <div class="action">
    <input type="submit" value="Register" name="button">
    <button><a href="user_registration.php">Sign-in</a> </button>
    
      
      
    </div>
  </form>
</div>
    

<footer>
<div class="bg-info p-3 text-center">
    <p>All rights resered © -- Designed by THOMAS CYRIL</p>
</div></footer>
 <?php
 include('connect.php');

if(isset($_POST['button'])){

$user =$_POST['username'];
$pass=$_POST['password'];
$select = "Select * from `user_table` where user_name = '$user' ";
$result = mysqli_query($con,$select);
$row =mysqli_num_rows($result);
$row_data = mysqli_fetch_assoc($result);
if($row>0){
        if(password_verify($pass,$row_data['user_password'])) {
            echo"<script> alert('login-sucessfully')</script>";
            
            echo"<script>window.open('main.php','_self')</script>";
        }
        else{
            echo"<script> alert('invalid creditianls')</script>";
        }
}
else{
    echo"<script> alert('invalid creditianls')</script>";
}
}


?>
</body>
</html>