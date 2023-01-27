<?php 
	include('head.php');
	include('../site-backend/connection.php');
?>
<body>
	<?php
		include('header.php');
	?>
	<details open>
		<summary>Catálogo</summary>
		<div style="display:flex;flex-wrap:wrap;">
			<?php                  
				$query = 'SELECT * FROM Livro';
				$result = mysqli_query($db, $query) or die (mysqli_error($db));

				while ($row = mysqli_fetch_assoc($result)) {
									
					echo '<figure style=margin:1em;>';
						echo '<a href="detail_livro.php?id='.$row['Id'].'">';
							echo '<img style="height:200px;" src="'.$row['Imagem'].'">';
						echo '</a>';
						echo '<figcaption style="width:150px">'. $row['Titulo'].'</figcaption>';
					echo '</figure> ';
				}
			?>
		</div>
	</details>
	<?php
		if (isset($_SESSION['user'])) {
			?>
			<details>
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
							$result = mysqli_query($db, $query) or die (mysqli_error($db));
							while ($row = mysqli_fetch_assoc($result)) {
				                                
								echo '<tr>';
									echo '<td><img width=100 src="'.$row['Imagem'].'"></td>';
									echo '<td>'. $row['Titulo'].'</td>';
									echo '<td>';
										echo '<a href="detail_livro.php?id='.$row['Id'].'" >Ver livro</a><br/>';
										echo '<a href="edit_livro.php?
id='.$row['Id'].'">Editar</a><br/>';
										echo '<a href="zeus.backend.biz/remove_livro.php?id='.$row['Id'].'">Remover</a>';
									echo '</td>';
								echo '</tr> ';
							}
						?>
					</tbody>
				</table>
			</details>
			<details>
				<summary>Usuarios</summary>
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