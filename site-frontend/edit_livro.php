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

  while($row = mysqli_fetch_array($result)){
    $id = $row['Id'];
    $Title = $row['Titulo'];
    $Link =  $row['Imagem'];
    $Desc = $row['Descricao'];  
  }

  ?>

  <h2>Editando Livro</h2>
  <br>
  <form method="post" action="edit_livro_post.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <img width=200 style="float:left;margin:1em;" src=<?php echo $Link?>>
    <input placeholder="Titulo" name="Titulo" value="<?php echo $Title?>"/> 
    
  </form>
  
</body>