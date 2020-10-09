<?php
 require '..\\model\connect.php';
 //$con = mysqli_connect("localhost","dev","123","lms");
 if($_POST){
   $con = Opencon();
   $title = $_POST['title'];
   $author = $_POST['author'];
   $publisher = $_POST['publisher'];
   $cost = floatval($_POST['cost']);
   $category = $_POST['category'];
   $sql = "insert into books (title,author,publisher,cost,category,availability) values ('$title','$author','$publisher','$cost','$category','Available')";
    mysqli_query($con,$sql);
 }


 ?>
