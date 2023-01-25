<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    
    <body>

        <?php

        $Id = $_POST['Id'];
        $Titu = $_POST['Titulo'];
        $Desc = $_POST['descricao'];
        
        include('connection.php');

        $query = 'UPDATE Livro set Id = "'.$Id.'", Titulo = "'.$Titu.'", Descricao = "'.$Desc.'"';
        mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
        ?>
    
    <script type="text/javascript">
		alert("Update Successfull.");
		window.location = "index.php";
	</script>

    </body>

</html>