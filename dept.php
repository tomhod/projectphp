<?php  include('connect.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><style>
        #j{
            margin:2px;
            padding:5px;
            border:3px solid green; color:silver;  background-color:black;
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
#di{
    color:green;
    background:black;
    margin:2px;
            padding:5px;
            text-decoration:none;
            border:3px dash white;
            border-radius:13px;
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
body{
    background-image: linear-gradient(to right, white, #82ffa1)
}

    </style>
</head>
<body >
    <h1>Department~Add </h1>
    <form action="#" method = 'post' >
        <label for="">Department-name</label>
        <input type="text" name="department">
        <br>
        <br><hr>
        <input type="submit" name = "sub" value="ADD" id="j">
    </form>
    <h3 align="center";><a href="main.php" id="i" >Go-to-Main-page</a></h3>
    <h3 align="center";><a href="dept.php?display" id="di" >display-department</a></h3>
</body>
</html>


<?php

if(isset($_POST['sub'])){
    $u = $_POST['department'];

    $k = "insert into `d` (department) values ('$u' ) ";
    $f = mysqli_query($con,$k);
    if($k){
        echo "
        <script> alert ('data inserted') </script>
        ";
    }
}



//display
if(isset($_GET['display'])){
  echo '  <table style="border:2px solid black" ; align = "center";>
    <thead >
    <tr>
        <td>Serial-no.</td>
        <td>Department-name</td>
       
        <td colspan="2"><h5 style="color:red">Operation</h5></td>
    </tr>
    </thead>';

    $r = " select * from `d` ";
    $rg = mysqli_query($con,$r);
    while($g = mysqli_fetch_array($rg)){
        $ide = $g['id'];
        $u = $g['department'];

        echo "<tbody>

           <tr>
           <td>$ide</td>
           <td>$u</td>
           <td><a href='dept.php?delete=".$ide."' style='color:red;'>delete</a></td>
           <td><a href='dept.php?update=".$ide."' style='color:green;'>update</a></td>
           </tr>

           </tbody>
        ";
    }
   echo ' </table>';
   
}


if(isset($_GET['update']))
{
echo '
<form action="#" method = "POST" >
<label>update-department</label><br>
<input type="text" name="department" value="">
<br>
<br><hr>
<input type="submit" name = "subc" value="update" id="j">
</form>
';


if(isset($_GET['update']))
$ide = $_GET['update'];{
if(isset($_POST['subc'])){
    $u = $_POST['department'];
   
    $d = "update `d` set department =  '$u'  where id = '$ide'";
    $r = mysqli_query($con,$d);
    if($r){
        echo "<script>alert('update')</script>";
        echo "<script>window.open('dept.php','_self');</script>";
    
    }}
}
}

if(isset($_GET['delete'])){
$id = $_GET['delete'];

    $c = "delete from `d` where id = '$id'";
    $m = mysqli_query($con,$c);
    if($m){
        echo "  <script> alert ('department data deleted') </script>";
        echo "  <script>window.open ('dept.php','_self') </script>";

    }
}



?>