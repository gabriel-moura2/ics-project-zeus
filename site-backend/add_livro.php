<html>
     <?php
     include('connection.php');
    ?>

<body>

<?php
$Titu = $_POST['titulo'];
$desc = $_POST['descricao'];
$adic = $_POST['pessoa'];

$query = "INSERT INTO Livro
          (Id, Titulo, Descricao) VALUES(NULL, '".$Titu.", '".$desc."')";
mysqli_query($db,$query) or die ('Error in Database'.mysqli_error($db));

?>


	<script type="text/javascript">
		alert("Successfully added.");
		window.location = "index.php";
	</script>


</body>

</html>