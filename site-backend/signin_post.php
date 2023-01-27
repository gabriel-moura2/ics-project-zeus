<?php
	include('connection.php');

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$senha = $_POST['password'];
	$data = $_POST['date'];

	$query = "INSERT INTO Usuario (`Id`, `Nome`, `Email`, `Senha`, `DataDeNascimento`) VALUES (NULL, '" . $nome . "', '" . $email . "', '" . $senha . "', '" . $data . "')";
	
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
	<script type="text/javascript">
        window.location = $frontend;
    </script>