<?php
    include('head.php');
?>
<body>
    <?php include('header.php') ?>
    <h2>Entrar</h2>
    <br>
    <form method="post" action="https://ics-project-zeus-backend.gabrielsantos8.repl.co/authentication.php">

        <div>
            <label>Nome</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="lastname">
        </div>
        <button type="submit" class="btn btn-success">Entrar</button>&nbsp;
		<a class="btn btn-info" href="index.php">Esqueci a senha</a>
    </form>
</body>
</html>