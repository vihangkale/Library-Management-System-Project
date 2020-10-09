<?php
 function Opencon(){
   $dbhost ="localhost";
   $dbuser = "dev";
   $dbpass = "123";
   $dbname ="lms";

   $con =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   
   if(!$con){
     die("connection failed".mysqli_connect_error());
   }

   return $con;
 }
 function Closecon(){
  mysqli_close($con);
 }


 ?>
