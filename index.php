<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
 


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
    </style>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  <link rel="stylesheet" href="../istyle.css">
    
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
button{
    font-size:20px;
    margin:15px;
}
pre{
    background-image: linear-gradient(to right,pink,white,pink, #82ffa1)
}
</style>

</head>
<body>
    

<!--nav bar-->
<div class="conatiner-fluid p-0 m-0">

<!--firstchild-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link text-light">PHP-Project</a>
                </li>
            </ul>
        </nav>
        </div>
    </nav>


    

    <!--thirdchild-->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-5">
                <p class="text-light text-center">~</p>
            </div>
            <div class="button text-center mx-3">
                <button><a href="user_registration.php" class="nav-linl text-light bg-info my-1">Registration</a></button>
                <button><a href="user_login.php" class="nav-linl text-light bg-info my-1">Login~here</a></button>
            </div>
        </div>
    </div>


    <pre style="border:3px solid red; color:red;" >
    <h5 align ="center"> Project context </h5>

    $   Database set up in MYSQL (phpmyadmin)
    $   Registration and login is there:
      * first you have to register that will store in database and match the creditianls to login      
      * implement basic validation example required.
      * password hashing is used.

    $ we haven't use session but after login you will redirect to main page where data will display .

    $ so we have two data table 
       * employee  
       * department

    $ crud is used in both table i.e ( employee & department )

    $ when you add department name in department table it will fetch in employee page form because we have fetch that in select option input so it will show in form of options

    $ try and catch & finally we have used in connecting the database.
    </pre>








</div>

    

</div>

<footer>
<div class="bg-info p-3 text-center">
    <p>All rights resered © -- Designed by THOMAS CYRIL</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>