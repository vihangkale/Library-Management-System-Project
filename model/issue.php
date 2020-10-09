<?php
require '..\\model\connect.php';
if($_POST){
  $con = Opencon();
  $bid =intval($_POST['Bookid']);
  $mid =intval($_POST['Mid']);
  $date =$_POST['date'];
  $sql ="insert into transactions (Mid,Bookid,IssueDate,Status) values ('$mid','$bid','$date',1)";
  $sql1 = "update books set availability ='Unavailable' where Bookid ='$bid'";
  mysqli_query($con,$sql);
  mysqli_query($con,$sql1);
}







?>
