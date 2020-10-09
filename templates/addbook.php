<?php
 require '..\\model\adbook.php';
 session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">

    main{
      margin-left:300px;
      margin-top:70px;
    }
    </style>

    <title>Add Book</title>
  </head>
  <body>
  <?php include '..\\templates\dashboard.php'; ?>
  <main>
    <h3 class="my-4">Add new book</h3>
    <form data-parsley-validate action="addbook.php" method="post" >
      <div class="form-group" >
       <label class="mt-2" for="title">Title</label>
       <input class="form-control" type="text" name="title" value="" data-parsley-required="true" data-trigger="change">
       <label class="mt-2" for="author">Author</label>
       <input class="form-control" type="text" name="author" value="" data-parsley-required="true" data-trigger="change">
       <label class="mt-2" for="publisher">Publisher</label>
       <input class="form-control" type="text" name="publisher" value="" data-parsley-required="true">
       <label class="mt-2" for="cost">Cost</label>
       <input class="form-control" type="text" name="cost" value="" data-parsley-required="true" data-parsley-type="number">
       <label class="mt-2" for="category">Category</label>
       <input class="form-control" type="text" name="category" value="" data-parsley-required="true">
       <input type="submit" name="submit" value="Add" class="mt-2 btn btn-primary">
      </div>


    </form>

   </main>

  </body>
</html>
