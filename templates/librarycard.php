<?php
 require '..\\model\libcard.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create library card</title>
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
      <h3 class="my-4">Create libaray card</h3>
      <form  action="librarycard.php" method="post">
        <div class="form-group" >
        <label class="mt-2" for="mid">MID</label>
        <input class="form-control" type="text" name="id" value="">
        <label class="mt-2" for="name">Name</label>
         <input class="form-control" type="text" name="name" value="">
         <label class="mt-2" for=surname>Surname</label>
         <input class="form-control" type="text" name="surname" value="">
         <label class="mt-2" for="phone">Phone</label>
         <input class="form-control" type="text" name="phone" value="">
         <label class="mt-2" for="type">Type</label><br>
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Student">
          <label class="form-check-label" for="inlineRadio1">Student</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Teacher">
          <label class="form-check-label" for="inlineRadio2">Teacher</label>
        </div><br>
        <input type="submit" name="submit" value="Add" class="mt-2 btn btn-primary">
        </div>

      </form>

    </main>


  </body>
</html>
