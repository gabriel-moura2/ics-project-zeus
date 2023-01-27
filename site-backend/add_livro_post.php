<?php
	session_start();
	include('connection.php');
	$Titu = $_POST['titulo'];
	$link = $_POST['link'];
	$desc = $_POST['descricao'];
	$adic = $_SESSION['user'];
	
	$query = "INSERT INTO Livro
	          (`Id`, `Titulo`, `Imagem`, `Descricao`, `Id_Usuario`) VALUES(NULL, '".$Titu."', '".$link."', '".$desc."', '".$adic."')";
	mysqli_query($db,$query) or die ('Error in Database '.mysqli_error($db));
	
?>


<script type="text/javascript">
	alert("Successfully added.");
	window.location = <?php '"'.$frontend.'"' ?>;
</script>