<?php
  require '..\\model\connect.php';

  if($_POST){
    $con = Opencon();
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = intval($_POST['phone']);
    $type =  $_POST['radio'];
    $sql = "insert into members (Mid,Name,Surname,Type,Phone) values ('$id','$name','$surname','$type','$phone')";
     mysqli_query($con,$sql);
  }


 ?>
