<?php
	include('head.php');
	include('connection.php');
?>
<body>
	<?php
		include('header.php');
		$query = 'SELECT * FROM Livro WHERE Id='.$_GET['id'];
		$result = mysqli_query($db, $query) or die(mysqli_error($db));

		while($row = mysqli_fetch_array($result)) {
			$image = $row['Imagem'];
			$titulo = $row['Titulo'];
			$desc = $row['Descricao'];
		}
	?>
	<article>
		<img width=200 style="float:left;margin:1em;" src=<?php echo $image ?>>
		<h2><?php echo $titulo ?></h2>
		<p><?php echo $desc ?></p>
	</article>
	
	
</body>
</html>