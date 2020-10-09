<?php require '..\\model\issue.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Issue book</title>
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
      <h3 class="my-4">Issue book</h3>
      <form data-parsley-validate action="issuebook.php" method="post">
        <div class="form-group" >
         <label class="mt-2" for="Bookid">Book ID</label>
         <input class="form-control" type="text" name="Bookid" value="" data-parsley-required="true" data-parsley-minlength="3" >
         <label class="mt-2" for="Mid">Memember ID</label>
         <input class="form-control" type="text" name="Mid" value="" data-parsley-required="true">
         <label class="mt-2" for="date">Date</label>
         <input class="form-control" type="date" name="date" value="" data-parsley-required="true">
         <input type="submit" name="submit" value="Add" class="mt-2 btn btn-primary">
        </div>


      </form>

    </main>


  </body>
</html>
