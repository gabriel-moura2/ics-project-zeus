<?php
    /*$db = mysqli_connect('192.168.100.20', 'ifrn', 'ifrn') or die ('Unable to connect. Check your connection parameters');
    mysqli_select_db($db, 'Zeus') or die(mysqli_error($db));*/
	$db = mysqli_connect('sql10.freesqldatabase.com', 'sql10593279', 'WXFVs882Mb') or die ('Unable to connect. Check your connection parameters');
    mysqli_select_db($db, 'sql10593279') or die(mysqli_error($db));
	#$backend = 'http://zeus.backend.biz';
	#$frontend = 'http://zeus.com.br';
	$frontend = 'https://ics-project-zeus.gabrielsantos8.repl.co';
	$backend = 'http://ics-project-zeus-1.gabrielsantos8.repl.co';
?>