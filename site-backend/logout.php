<?php 

	if ( ! session_id() ) @ session_start();

	session_unset();

	session_destroy();

?>
	<script type="text/javascript">
        window.location = "zeus.com.br";
    </script>