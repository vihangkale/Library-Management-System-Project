<?php
require '..\\model\connect.php';
if(isset($_POST['submit'])){
  $con = Opencon();
  $bid =intval($_POST['Bookid']);
  //$mid =intval($_POST['Mid']);
  $date =$_POST['date'];
  $date1 =date_create($_POST['date']);
  $sql3 ="select IssueDate from transactions where Bookid='$bid' and Status=1";
  $result =mysqli_query($con,$sql3);
  $issuedate = mysqli_fetch_assoc($result);
  //print_r($issuedate);
  $issuedate = date_create($issuedate['IssueDate']);
  //echo $issuedate;
  $diff =date_diff($issuedate,$date1);
  $days = $diff->format("%R%a days");
  $days =intval($days);
  if($days >7){

    $fine =($days-7)*2;
  }
  else{
    $fine = 0;
  }
  $sql4 ="update transactions set Fine =$fine where Bookid='$bid' and Status =1";
  $sql5 = "select Fine from transactions where Bookid='$bid' and Status = 1;";
  mysqli_query($con,$sql4);
  $result1 =mysqli_query($con,$sql5);
  $pay = mysqli_fetch_assoc($result1);
  mysqli_free_result($result1);
  $sql ="update transactions set ReturnDate ='$date', Status =0 Where Bookid='$bid'and Status=1";
  $sql1 ="update books set availability='Available' where Bookid='$bid'";
  mysqli_query($con,$sql);
  mysqli_query($con,$sql1);

}

  //Calculate fine
  /*if(isset($_POST['check'])){
    $con = Opencon();
    $bid =intval($_POST['Bookid']);
    $date1 =date_create($_POST['date']);
    $sql3 ="select IssueDate from transactions where Bookid='$bid' and Status=1";
    $result =mysqli_query($con,$sql3);
    $issuedate = mysqli_fetch_assoc($result);
    //print_r($issuedate);
    $issuedate = date_create($issuedate['IssueDate']);
    //echo $issuedate;
    $diff =date_diff($issuedate,$date1);
    $days = $diff->format("%R%a days");
    $days =intval($days);
    if($days >7){

      $fine =($days-7)*2;
    }
    else{
      $fine = 0;
    }
    $sql4 ="update transactions set Fine =$fine where Bookid='$bid' and Status =1";
    $sql5 = "select Fine from transactions where Bookid='$bid' and Status = 1;";
    mysqli_query($con,$sql4);
    $result1 =mysqli_query($con,$sql5);
    $pay = mysqli_fetch_assoc($result1);
    mysqli_free_result($result1);

  }*/








?>
