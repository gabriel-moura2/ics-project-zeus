<?php
  include('head.php');
?>

<body>

  <?php include('header.php')?>

  <?php

  $query = 'SELECT * FROM Usuario WHERE Id='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));

  while($row = mysqli_fetch_array($result)){
    $id = $row['Id'];
    $Nome = $row['Nome'];
    $Senha =  $row['Senha'];
    $Email = $row['Email'];
    $Data = $row['DataDeNascimento'];
  }

  ?>

  <h2>Editando Perfil</h2>
  <br>
  <form method="post" action=<?php echo $backend."/edit_usuario_post.php"?>>
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <div>
      <label>Nome</label> 
      <input placeholder="name" type="text" name="name" value="<?php echo $Nome;?>"/>
    </div>
    <div>
      <label>Senha</label> 
      <input placeholder="senha" type="password" name="senha" value="<?php echo $Senha;?>"/>
    </div> 
    <div>
      <label>Email</label> 
      <input placeholder="email" type="email" name="email" value="<?php echo $Email;?>"></input>
    </div>
    <div>
      <label>Data de Nascimento</label> 
      <input placeholder="data" type="date" name="data" value="<?php echo $Data;?>"></input>
    </div>
    <button type="submit">Alterar</button>
    <a href="index.php"> Retornar</a>
  </form>
  
</body>