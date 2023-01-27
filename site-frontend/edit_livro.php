<?php
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
  <form method="post" action=<?php echo $backend."/edit_livro_post.php"?>>
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <img width=200 style="float:left;margin:1em;" src=<?php echo $Link;?>>
    <div>
      <label>Titulo</label> 
      <input placeholder="Titulo" name="Titulo" value="<?php echo $Title;?>"/>
    </div>
    <div>
      <label>Link da Imagem</label> 
      <input placeholder="Imagem" name="Imagem" value="<?php echo $Link;?>"/>
    </div> 
    <div>
      <label>Descrição</label> 
      <textarea placeholder="descricao" name="descricao" value="<?php echo $Desc;?>"></textarea>
    </div>
    <button type="submit">Alterar</button>
    <a href="index.php"> Retornar</a>
  </form>
  
</body>