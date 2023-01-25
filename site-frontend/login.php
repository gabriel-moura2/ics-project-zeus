<?php
    include('head.php');
?>
<body>
    <?php include('header.php') ?>
    <h2>Entrar</h2>
    <br>
    <form method="post" action="authentication.php">

        <div>
            <label>Nome</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Entrar</button>
		<a href="#">Esqueci a senha</a>
    </form>
</body>
</html>