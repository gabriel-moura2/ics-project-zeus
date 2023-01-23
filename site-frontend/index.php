<?php 
	include('head.php');
?>
<body>
    <?php include('header.php'); 
		if (isset($_SESSION["user"])) echo $_SESSION["user"];
	?>
    <a href="login.php">Entrar</a>
	<a href="signin.php">Cadastrar-se</a>
	<a href="add_pessoa.php">Adicionar uma nova pessoa</a>
	<br/><br/>
</body>
</html>