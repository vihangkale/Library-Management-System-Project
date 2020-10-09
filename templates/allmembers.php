<?php
require '..\\model\connect.php';
  $con =Opencon();
  $sql = "select * from members";
  $result =mysqli_query($con,$sql);
  $memberlist=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Fergusson college library</title>
    <link rel="stylesheet" href="..\\bootstrap4\css\bootstrap.css">
     <link rel="stylesheet" href="..\\style\style.css">
   </head>
   <body>
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand " href="index.html">Fergusson college library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav my-2">
        <li class="nav-item ">
          <a class="nav-link ml-2 text-light" href="report.php">Back</a>
        </li>
      </ul>
    </div>
  </nav>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">MId</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Type</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($memberlist as $member): ?>
      <tr>
        <td>
        <?php echo $member['Mid']; ?>  </td>
        <td> <?php echo $member['Name']; ?></td>
        <td> <?php echo $member['Surname']; ?></td>
        <td> <?php echo $member['Type']; ?> </td>
        <td> <?php echo $member['Phone']; ?></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

  <footer class ="footer bg-dark my-2">
     <p class="text-center text-light">Library managment system Project by Pranav Gulavani & Vihang Kale</p>
  </footer>
  <script src="bootstrap4\js\bootstrap.min.js">
  </script>
 </body>
 </html>
