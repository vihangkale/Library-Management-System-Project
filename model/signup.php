<?php
 require '..\\model\connect.php';
 if($_POST){
   $con = Opencon();
   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];
   $sql = "insert into adduser (name,surname,email,password,phone) values ('$name','$surname','$email','$password','$phone')";
    mysqli_query($con,$sql);
 }


?>
