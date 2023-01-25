<?php 
	include('head.php');
	include('connection.php');
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
							<th>Id</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Data de Nascimento</th>
						</tr>
					</thead>
					<tbody>
						<?php                  
							$query = 'SELECT * FROM Usuario';
							$result = mysqli_query($db, $query) or die (mysqli_error($db));

							while ($row = mysqli_fetch_assoc($result)) {
				                                
								echo '<tr>';
									echo '<td>'. $row['Id'].'</td>';
									echo '<td>'. $row['Nome'].'</td>';
									echo '<td>'. $row['Email'].'</td>';
									echo '<td>'. $row['DataDeNascimento'].'</td>';
								echo '</tr> ';
							}
							?>
					</tbody>
				</table>
			</details>
			<?php
		}
	?>
</body>
</html>