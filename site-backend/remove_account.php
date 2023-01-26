<?php
	session_start();
	include('connection.php');
	$query = 'DELETE FROM Usuario WHERE id='.$_SESSION['user'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('logout.php')
?>