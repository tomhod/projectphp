<?php
$e = 'error';
$conn = '4';
$con = mysqli_connect('localhost','root','','phppro');
try{
if(!$conn){
     echo "not connected";
}}
catch(exception $e){
     echo "wrong connection variable" + $e;
}
finally{
     if(!$con){
          echo "not connected";
     } 
}

try {
     // run your code here
 }
 catch (exception $e) {
     //code to handle the exception
 }
 finally {
     //optional code that always runs
 }
?>