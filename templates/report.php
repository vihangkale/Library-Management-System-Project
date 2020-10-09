<?php
session_start();
if($_SESSION['status']!= 1){
    header('location:..//templates/login.php');
}
require '..\\model\summary.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <style media="screen">
    main{
      margin-left:300px;
      margin-top:70px;
    }
    </style>
  </head>
  <body>
    <?php include '..\\templates\dashboard.php'; ?>
    <main>
      <h3 class="my-4">Summary</h3>
      <button type="button" class="btn btn-primary p-3 m-3">
        Books <span class="badge badge-light p-2"><?php echo $books['total'] ;?> </span>
     </button>
     <button type="button" class="btn btn-secondary p-3  m-3">
       Members <span class="badge badge-light p-2"><?php echo $member['members'] ;?> </span>
    </button>
    <button type="button" class="btn btn-warning p-3 m-3">
      Pending <span class="badge badge-light p-2"><?php echo $pending['Pending'] ;?> </span>
   </button>
   <button type="button" class="btn btn-primary p-3 m-3">
     Available <span class="badge badge-light p-2"><?php echo $available['available'] ;?> </span>
  </button>
  <button type="button" class="btn btn-secondary p-3 m-3">
    Total fine <span class="badge badge-light p-2"><?php echo $fine[0] ;?> </span>
 </button>
    <div class="mt-4">
      <ul>
        <li>  <a href="allbooks.php" class="ml-2">All books</a></li>
        <li><a href="allmembers.php"class="ml-2">All memebers</a></li>
        <li><a href="transactions.php"class="ml-2">Transactions</a></li>
      </ul>


    </div>



    </main>


  </body>
</html>
