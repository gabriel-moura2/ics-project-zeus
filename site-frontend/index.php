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
				<summary>Livros</summary>
				<a href="add_livro.php">Adicionar um livro</a>
				<table>
					<thead>
						<tr>
							<th>Capa</th>
							<th>Titulo</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php                  
							$query = 'SELECT * FROM Livro WHERE Id_Usuario='.$_SESSION['user'];
							$result = mysqli_query($db, $query) or die (mysqli_error($db));

							while ($row = mysqli_fetch_assoc($result)) {
				                                
								echo '<tr>';
									echo '<td>'.$row['Imagem'].'</td>';
									echo '<td>'. $row['Titulo'].'</td>';
									echo '<td>';
										echo '<a href="detail_livro.php?id='.$row['people_id'].'" >Ver livro</a><br/>';
										echo '<a href="edit_livro.php?id='.$row['Id'].'">Editar</a><br/>';
										echo '<a href="remove_livro.php?id='.$row['Id'].'">Remover</a>';
									echo '</td>';
								echo '</tr> ';
							}
						?>
					</tbody>
				</table>
			</details>
			<details>
				<summary>Usuarios</summary>
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