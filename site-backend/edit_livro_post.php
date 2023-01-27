<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
  <body>

    <?php 

    $id = $_POST['id'];
    $titulo = $_POST['Titulo'];
    $link = $_POST['Imagem'];
    $desc = $_POST['descricao'];

    include('connection.php');

    $query = 'UPDATE Livro set  Titulo ="'.$titulo.'", Imagem ="'.$link.'",  Descricao ="'.$desc.'" WHERE Id = "'.$id.'"';
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
  
    ?>
    
  </body>

  <script type="text/javascript">
			window.location = <?php '"'.$frontend.'"' ?>;
		</script>
  
</html>