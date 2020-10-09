<?php
require '..\\model\connect.php';
session_start();
$_SESSION['status']=0;
if($_POST){
  $con =Opencon();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from adduser where email ='$email' and password ='$password'";
  $result = mysqli_query($con ,$sql);
  $count = mysqli_num_rows($result);
  $error = "<h5 class='text-danger'>Wrong email id or password Please enter correct credentials</h5>";
  if($count == 1){
    $_SESSION['status'] = 1;
    header("location:..//templates/report.php");
  }
  else{
     $error;
  }
}


 ?>
