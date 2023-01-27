<?php 
	session_start();
	include('../site-backend/connection.php');

	$query = 'SELECT * FROM Usuario WHERE Nome=\''. $_POST['name'].'\'';
	
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {
		$id = $row['Id'];
		$password = $row['Senha'];
  	}
	if ($_POST['password'] != $password) die("senha incorreta");
		
	$_SESSION["user"] = $id;
?>
	<script type="text/javascript">
        window.location = "/";
    </script>