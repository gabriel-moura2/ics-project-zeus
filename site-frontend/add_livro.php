<?php
    include('head.php');
?>
<body>
    <?php include('header.php') ?>
    <h2>Adicionar novo livro</h2>
    <br>
    <form method="post" action="zeus.backend.biz/add_livro_post.php">
        <div>
            <label>Titulo</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label>Link de uma Imagem</label>
            <input type="text" name="link">
        </div>
		<div>
			<label>Descrição</label>
			<textarea name="descricao"></textarea>
		</div>
        <button type="submit">Adicionar</button>
		<a href="/">Retornar</a>
    </form>
</body>
</html>