<?php
  require '..\\model\connect.php';
  if($_POST){
    $con =Opencon();
    $search = $_POST['search'];
    $sql = "select * from books where title Like '%$search%'";
    $result =mysqli_query($con,$sql);
    $booklist=mysqli_fetch_all($result,MYSQLI_ASSOC);
    //$size = sizeof($booklist);
    //printf($size);
    //print_r($booklist);

  }
 ?>
