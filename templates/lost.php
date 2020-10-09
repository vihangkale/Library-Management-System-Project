<?php require '..\\model\lostfound.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lost and found</title>
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
      <h3 class="my-4">Lost and found</h3>
      <form data-parsley-validate action="lost.php" method="post">
        <div class="form-group" >
         <label class="mt-2" for="Mid">Memember ID</label>
         <input class="form-control" type="text" name="mid" value="" >
         <input type="submit" name="check" value="Check" class="mt-2 btn btn-primary"><br>
         <h5 class="mt-4 text-info"><?php
           if(isset($_POST['check'])){
             echo 'Bookid :'.$bookid." Fine :".$cost[0];
           }
          ?></h5>
         <label class="mt-2" for="bid">Book ID</label>
         <input class="form-control" type="text" name="bid" value=""  data-parsley-minlength="3">
         <input  type="submit" name="delete" value="Delete" class="mt-2 btn btn-danger" onclick="confirm('Are you sure you want to delete ?')" >
         


      </form>

    </main>
   <script type="text/javascript">
      function check(){

      }

   </script>

  </body>
</html>
