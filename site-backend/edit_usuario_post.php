<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
  <body>

    <?php 

    $id = $_POST['id'];
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data = $_POST['data'];

    include('connection.php');

    $query = 'UPDATE Usuario set  Nome="'.$nome.'", Senha="'.$senha.'",  Email="'.$email.'" WHERE Id="'.$id.'"';
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
  
    ?>
    
  </body>

  <script type="text/javascript">
			window.location = "zeus.com.br";
		</script>
  
</html>