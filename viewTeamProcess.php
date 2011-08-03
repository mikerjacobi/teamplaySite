<?php
	session_start();
	$_SESSION['teamName'] = $_POST['teamName'];
	header('Location: shell.php#tab2')

?>