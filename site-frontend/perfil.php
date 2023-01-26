<?php
	include('head.php');
	include('connection.php');
	include('zeus.backend.biz/user_session.php');
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['Id'];
    	$nome = $row['Nome'];
    	$email = $row['Email'];
    	$date = $row['DataDeNascimento'];
             
  	}
              
?>
<body>
	<?php include('header.php') ?>
	<table>
		<tbody>
			<tr>
				<th>Id</th>
				<td><?php echo $id ?></td>
			</tr>
			<tr>
				<th>Nome</th>
				<td><?php echo $nome ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<th>Data de Nascimento</th>
				<td><?php echo $date ?></td>
			</tr>
		</tbody>
	</table>
  <?php

    echo '<a href="/">Retornar</a>';
    echo '<a href="edit_usuario.php?id='.$id.' "> Editar conta</a> ';
    echo '<a href="zeus.backend.biz/remove_account.php">Deletar conta</a>';

?>
	
</body>
</html>
