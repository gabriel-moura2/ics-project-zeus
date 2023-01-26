<?php
    include('head.php');
?>
<body>
    <?php include('header.php') ?>
    <h2>Cadastrar</h2>
    <br>
    <form method="post" action="zeus.backend.biz/signin_post.php">

        <div>
            <label>Nome de Usuário</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="password">
        </div>
		<div>
			<label>Email</label>
            <input type="email" name="email">
		</div>
		<div>
			<label>Data de nascimento</label>
            <input type="date" name="date">
		</div>
        <button type="submit">Cadastrar-se</button>
    </form>
</body>
</html>