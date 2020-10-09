<?php
require '..\\model\connect.php';
  $con =Opencon();
  $sql = "select * from transactions";
  $result =mysqli_query($con,$sql);
  $transactlist=mysqli_fetch_all($result,MYSQLI_ASSOC);
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
      <th scope="col">Transaction Id</th>
      <th scope="col">Memeber Id</th>
      <th scope="col">Book Id</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Return Date</th>
        <th scope="col">Fine</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($transactlist as $transaction): ?>
      <tr>
        <td>
        <?php echo $transaction['trid']; ?>  </td>
        <td> <?php echo $transaction['Mid']; ?></td>
        <td> <?php echo $transaction['Bookid']; ?></td>
        <td> <?php echo $transaction['IssueDate']; ?> </td>
        <td> <?php echo $transaction['ReturnDate']; ?></td>
        <td> <?php echo $transaction['Fine']; ?></td>

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
