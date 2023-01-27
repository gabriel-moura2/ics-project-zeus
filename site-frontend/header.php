<header>
    <h1>Zeus</h1>
	<nav>
		<ul>
			<?php
				if (! isset($_SESSION['user'])) {
			?>
				
		    	<li><a href="login.php">Entrar</a></li>
				<li><a href="signin.php">Cadastrar-se</a></li>
			<?php } else { ?>
				<li><a href="zeus.backend.biz/logout.php">Sair</a></li>
				<li><a href="perfil.php">Perfil</a></li>
			<?php } ?>
		</ul>
	</nav>
</header>
