<?php
  require '..\\model\connect.php';

    if(isset($_POST['check'])){
      $con =Opencon();
      $check = intval($_POST['mid']);
      $sql = "select * from transactions where Mid like '$check'";

      $result = mysqli_query($con,$sql);


      $member= mysqli_fetch_all($result);
      $member=end($member);
      $bookid = $member[2];
      $sql1 ="select Cost from books where Bookid like '$bookid'";
      $result1 = mysqli_query($con,$sql1);
      $cost = mysqli_fetch_array($result1);
      $fine =$cost[0];
      $sql2 ="update transactions set Fine='$fine' where Bookid='$bookid' and status= 1";
      mysqli_query($con,$sql2);
    }
    if(isset($_POST['delete'])) {
      $con =Opencon();
      $bid = intval($_POST['bid']);
      $query ="Update books set availability='Deleted' where Bookid='$bid'";
      mysqli_query($con,$query);

    }



 ?>
