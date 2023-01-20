<?php
    include('head.php');
?>
<body>
    <?php include('header.php') ?>
    <h2>Adicionar nova pessoa</h2>
    <br>
    <form method="post" action="zeus.backend.biz/add_pessoa.php">

        <div>
            <label>Nome</label>
            <input name="firstname">
        </div>
        <div>
            <label>Sobrenome</label>
            <input name="lastname">
        </div>
        <div>
            <label>Descrição</label>
            <textarea name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar</button>&nbsp;
		<a class="btn btn-info" href="index.php">Retornar</a>
    </form>
</body>
</html>