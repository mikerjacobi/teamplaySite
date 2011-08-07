<?php
	session_start();
	$_SESSION['teamName'] = $_POST['teamid'];
	header('Location: shell.php#tab2')

?>