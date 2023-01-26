<?php
  session_start();
  include('connection.php');
  include('head.php');
?>

<body>

  <?php include('header.php')?>

  <?php

  $query = 'SELECT * FROM Livro WHERE Id='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));

  while($row = mysqli_fetch)

  ?>
  
</body>