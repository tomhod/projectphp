<?php  include('connect.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        #j{
            margin:2px;
            padding:5px;
            border:3px solid green; color:silver;  background-color:black;
        }
        #i{
    color:green;
    background:black;
    margin:2px;
            padding:5px;
            text-decoration:none;
            border:3px dash white;
            border-radius:13px;
}
#di{
    color:red;
    background:black;
    margin-top:25px;
            padding:5px;
            text-decoration:none;
            border:3px dash white;
            border-radius:13px;
            
}

#diy{
    color:blue;
    background:white;
    margin:0 auto;
            padding:5px;
            text-decoration:none;
            border:3px dash white;
            border-radius:13px;
            width:20%;
}
#im{
    color:blue;
    background:white;
    margin:0 auto;
            padding:5px;
            text-decoration:none;
            border:3px dash white;
            border-radius:13px;
            width:20%;
}
       

table tr td{
        padding:15px;
    }
    tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

body{
    background-image: linear-gradient(to right,pink,red,white,violet,brown,white, yellow, #82ffa1)
}
    </style>
</head>
<body>

<div class="container-fluid">
        <h2 class="text-center mx-3"id ="i">Add-employee</h2>
        <div class="row d-flex align-items-center justify-content-center" >
            <div class="col-lg-12 col-xl-6">


    <h1>DATA add</h1>
    <form action="#" method = 'post' >
    <div class="form-outline mb-4">
        <label for=""  class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
        </div>
        <br>
        <div class="form-outline mb-4">
        <label for=""  class="form-label">Department</label>
        <select name="department" id="" class="form-control">
                    <option value="">Select a Department</option>

                    <?php
                          $select_query="Select * from `d`";
                          $result_query=mysqli_query($con,$select_query);
                          while($row=mysqli_fetch_assoc($result_query)){
                              $department_name=$row['department'];
                              $department_id=$row['id'];
                              echo "<option value='$department_name'>$department_name</option>";
                          }


                    ?>
                </select> </div>
        <br>
        <div class="form-outline mb-4">
        <label for=""  class="form-label">Age</label>
        <input type="number" name="age" class="form-control">
        </div>
        <br>
        <div class="form-outline mb-4">
        <label for=""  class="form-label">Salary</label>
        <input type="number" name="salary" class="form-control">
        </div>
        <br><hr>
       
        <input type="submit" name = "sub" value="ADD" id="j"  class="form-label">
                        </div>
    </form>
    </div>
        </div>
</div>
<h3 align="center";><a href="main.php" id="im" >Go-to-Main-page</a></h3>
    <h3 style="color:green; " align='center' id='diy'><a href="employee.php?display">display-data</a></h3>
</body>
</html>


<?php

if(isset($_POST['sub'])){
    $u = $_POST['name'];
    $p = $_POST['department'];
    $g = $_POST['age'];
    $l = $_POST['salary'];

    $k = "insert into `data` (name , department, age , salary) values ('$u' , '$p','$g','$l') ";
    $f = mysqli_query($con,$k);
    if($k){
        echo "
        <script> alert ('employee data inserted') </script>
        ";
    }
}
?>



<?php

if(isset($_GET['display']))?>
    <table style='border:2px solid black' ; align = 'center';>
    <thead >
    <tr>
        <td>Serial-no.</td>
        <td>Employee-name</td>
        <td>Department</td>
        <td>Age</td>
        <td>salary</td>
       
        <td colspan='2'><h5 style="color:red">Operation</h5></td>
    </tr>
    </thead>
    <?php
    $r = " select * from `data` ";
    $rg = mysqli_query($con,$r);

    while($g = mysqli_fetch_array($rg)){
        $ide = $g['id'];
        $u = $g['name'];
        $p = $g['department'];
        $gm = $g['age'];
        $l = $g["salary"];

        echo "
         <tbody> 
           <tr>
           <td>$ide</td>
           <td>$u</td>
           <td>$p</td>
           <td>$gm</td>
           <td>$l</td>
           <td><a href='employee.php?delete=".$ide." ' style='color:red'>delete</a></td>
           <td><a href='employee.php?update=".$ide."'style='color:green'>update</a></td>
           </tr>
</tbody>
          
        ";

    }
    echo '</table>';
?>
   

<?php

if(isset($_GET['update']))
{

    echo " <h3 align='center'; id='di'>update</h3>
    <form action='#' method = 'POST' >
    <label class='form-label' >Employee-name</label><br>
    <input type='text' name='name' class='form-control'>
    <br>
    <label for='' class='form-label'>Department</label>
            <select name='department' id=''  class='form-control'>
                        <option value=''>Select a Department</option>" ;



                
                          $select_query='Select * from `d`';
                          $result_query=mysqli_query($con,$select_query);
                          while($row=mysqli_fetch_assoc($result_query)){
                          
                              $department_name=$row['department'];
                              echo "<option value='$department_name'>$department_name</option>";
                          }


                
          


echo"
</select>
<br>
<br>
<label class='form-label'>Age</label>
<input type='number' name='age'  class='form-control'>
<br>
<label class='form-label'>Salary</label>
<input type='number' name='salary'  class='form-control'>
<br><hr>
<input type='submit' name = 'subc' value='update' id='j' class='form-label'>
</form>";

if(isset($_GET['update']))
$ide = $_GET['update'];{
if(isset($_POST['subc'])){
    $u = $_POST['name'];
    $p = $_POST['department'];
    $g = $_POST['age'];
    $l = $_POST['salary'];
   
    $d = "update `data` set name =  '$u' , department = '$p' , age = '$g' , salary = '$l'  where id = '$ide'";
    $r = mysqli_query($con,$d);
    if($r){
        echo "<script>alert('employee data update')</script>";
        echo "<script>window.open('employee','_self');</script>";
    
    }}
}
}

if(isset($_GET['delete'])){
$id = $_GET['delete'];

    $c = "delete from `data` where id = '$id'";
    $m = mysqli_query($con,$c);
    if($m){
        echo "  <script> alert ('data deleted') </script>";
        echo "  <script>window.open ('employee.php','_self') </script>";

    }
}



?>