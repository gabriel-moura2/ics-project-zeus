<?php
	session_start();
	$query = 'SELECT * FROM Livro WHERE Id_Usuario='.$_SESSION['user'];
	$logged = isset($_SESSION['user']);
?>