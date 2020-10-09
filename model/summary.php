<?php
require '..\\model\connect.php';

$con = Opencon();
$sql = "select count(Bookid) as total from books";
$result =mysqli_query($con,$sql);
$books = mysqli_fetch_assoc($result);
mysqli_free_result($result);

$sql1 = "select count(Mid) as members from members";
$result =mysqli_query($con,$sql1);
$member = mysqli_fetch_assoc($result);
mysqli_free_result($result);

$sql2 ="select count(availability) as Pending from books where availability like 'Unavailable'";
$result =mysqli_query($con,$sql2);
$pending =mysqli_fetch_assoc($result);
mysqli_free_result($result);

$sql3 ="select count(availability) as available from books where availability like 'Available'";
$result =mysqli_query($con,$sql3);
$available =mysqli_fetch_assoc($result);
mysqli_free_result($result);

$sql4 = "select sum(fine) from transactions";
$result =mysqli_query($con,$sql4);
$fine = mysqli_fetch_array($result);
mysqli_free_result($result);







?>
