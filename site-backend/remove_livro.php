<?php
  include('connection.php');
  $query = 'DELETE FROM Livro Where Id = '.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
<script type="text/javascript">
		window.location = "zeus.com.br";
	</script>