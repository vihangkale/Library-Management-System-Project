<?php
 require '..\\model\signup.php';
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

    <title>create librarian</title>
  </head>
  <body>
  <?php include '..\\templates\dashboard.php'; ?>
  <main>
    <h3 class="my-4">Create new librarian</h3>
    <form  data-parsley-validate action="createlibrarian.php" method="post" class="needs-validation">
      <div class="form-group" >
       <label class="mt-2" for="name">Name</label>
       <input class="form-control" type="text" name="name" value="" data-parsley-required="true">
       <div class="invalid-feedback">Please fill out this field.</div>
       <label class="mt-2" for="">Surname</label>
       <input class="form-control" type="text" name="surname" value="" data-parsley-required="true">
       <div class="invalid-feedback">Please fill out this field.</div>
       <label class="mt-2" for="">Email</label>
       <input class="form-control" type="email" name="email" value="" data-parsley-required="true">
       <div class="invalid-feedback">Please fill out this field.</div>
       <label class="mt-2" for="">Password</label>
       <input class="form-control" type="password" name="password" value="" data-parsley-required="true">
       <div class="invalid-feedback">Please fill out this field.</div>
       <label class="mt-2" for="">Phone</label>
       <input class="form-control" type="text" name="phone" value="" data-parsley-required="true" data-parsley-type="number" data-parsley-minlength="10" data-parsley-max="10">
       <div class="invalid-feedback">Please fill out this field.</div>
       <input type="submit" name="submit" value="Create" class="mt-2 btn btn-primary">
      </div>


    </form>

   </main>


  </body>
</html>
