<?php  require '..\\model\return.php';
  $pay= $pay['Fine'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Return book</title>
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
      <h3 class="my-4">Return book</h3>
      <form data-parsley-validate action="returnbook.php" method="post">
        <div class="form-group" >
         <label class="mt-2" for="Bookid">Book ID</label>
         <input class="form-control" type="text" name="Bookid" value="" data-parsley-required="true" data-parsley-minlength="3">
         <label class="mt-2" for="date">Date</label>
         <input class="form-control" type="date" name="date" value="" data-parsley-required="true">
         <input type="submit" name="submit" value="Add" class="mt-3 btn btn-primary">
          <h4 class="mt-4 text-info"><?php echo "Fine:".$pay;?></h4>
        </div>
      </form>


    </main>


  </body>
</html>
