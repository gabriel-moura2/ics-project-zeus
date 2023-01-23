<?php 
	session_start();

	if (! isset($_SESSION["user"])) $_SESSION["user"] = '1';

	<script type="text/javascript">
        alert("Update Successfull.")
        window.location = "index.php"
    </script>
?>