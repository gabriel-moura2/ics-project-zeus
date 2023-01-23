<?php 
	include('head.php');
?>
<body>
	<?php
		include('header.php'); 
		if (isset($_SESSION["user"])) {
			?>
			<details open>
				<summary>Pessoas</summary>
				<a href="add_pessoa.php">Adicionar uma pessoa</a>
				<table>
					<thead>
						<tr>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Raça</th>
							<th>País</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</details>
			<?php
		}
	?>
</body>
</html>