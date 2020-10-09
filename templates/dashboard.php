 <?php
 session_start();
 if($_SESSION['status']!= 1){
     header('location:..//templates/login.php');
 }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fergusson college library</title>
    <link rel="stylesheet" href="..\\bootstrap4\css\bootstrap.css">
    <link rel="stylesheet" href="..\\style\dashboard.css">
    <link rel="stylesheet" href="..\\font-awesome-4.7.0\css\font-awesome.css">
    <style media="screen">

        input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
      color: #468847;
      background-color: #DFF0D8;
      border: 1px solid #D6E9C6;
    }

    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
      color: #B94A48;
      background-color: #F2DEDE;
      border: 1px solid #EED3D7;
    }

    .parsley-errors-list {
      margin: 2px 0 3px;
      padding: 0;
      list-style-type: none;
      font-size: 0.9em;
      line-height: 0.9em;
      opacity: 0;
      color: #B94A48;

      transition: all .3s ease-in;
      -o-transition: all .3s ease-in;
      -moz-transition: all .3s ease-in;
      -webkit-transition: all .3s ease-in;
    }

    .parsley-errors-list.filled {
      opacity: 1;
    }
    </style>
    <script type="text/javascript" src="..\\bootstrap4\js\jquery-3.5.0.js"></script>
    <script type="text/javascript" src="..\\bootstrap4\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="..\\bootstrap4\js\parsley.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">FC <span class="text-primary">LMS</span></a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="..//model/signout.php">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item my-2">
              <span class="ml-4  text-secondary"> Dashboard </span>
            </li>
            <a href="addbook.php">
              <li class="my-2 ml-4 "><i class="fa fa-plus"></i><span class="ml-2">Add book</span></li>
            </a>
            <a href="librarycard.php">
              <li class="my-2 ml-4 "><i class="fa fa-id-card-o" aria-hidden="true"></i><span class="ml-2">Create library card</span></li>
            </a>
            <a href="issuebook.php">
              <li class="my-2 ml-4 "><i class="fa fa-book" aria-hidden="true"></i><span class="ml-2">Issue books</span></li>
            </a>
            <a href="returnbook.php">
              <li class="my-2 ml-4 "><i class="fa fa-book" aria-hidden="true"></i><span class="ml-2">Retrun books</span></li>
            </a>
            <a href="lost.php">
              <li class="my-2 ml-4 "><i class="fa fa-bookmark" aria-hidden="true"></i><span class="ml-2">Lost and found</span></li>
            </a>
            <a href="report.php">
              <li class="my-2 ml-4 "><i class="fa fa-bar-chart"></i><span class="ml-2">Reports</span></li>
            </a>
            <a href="createlibrarian.php">
              <li class="my-2 ml-4 "><i class="fa fa-user-o"></i><span class="ml-2">Add new user</span></li>
            </a>
          </ul>
        </div>
      </nav>


 </body>
</html>
