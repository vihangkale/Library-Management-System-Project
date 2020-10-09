<?php
require '..\\model\connect.php';
   session_destroy();
   Closecon();
   header("location:..//templates/login.php");

 ?>
