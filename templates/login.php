<?php
  require '..\\model\auth.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fergusson college library</title>
    <link rel="stylesheet" href="..\\bootstrap4\css\bootstrap.css">
    <link rel="stylesheet" href="..\\style\signin.css">
  </head>
  <body class="text-center">
   <form class="form-signin" action="login.php" method="post" >
     <?php/* if($_POST){
       echo $error;
     }*/
     ?>
     <h1><a href="..\index.html">FC<span class="ml-1 mb-2 text-primary">LMS<span></a></h1>
     <h3 class="h3 mb-3 font-weight-normal text-secondary">Please sign in</h3>
     <label for="inputEmail" class="sr-only">Email address</label>
     <input type="email" name ="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus >
     <label for="inputPassword" class="sr-only">Password</label>
     <input type="password" name ="password" id="inputPassword" class="form-control mt-3" placeholder="Password" required>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

    <script type="text/javascript" src="..\\bootstrap4\js\jquery-3.4.1.slim.js"></script>
    <script type="text/javascript" src="..\\bootstrap4\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="..\\bootstrap4\js\parsley.min"></script>
 </body>
</html>
