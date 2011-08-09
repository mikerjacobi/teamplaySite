<?php
	session_start();


	$uid = md5($_POST['uid']);
	$pw = md5($_POST['pw']);

	
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->creds;
	
	$data = $c->findOne(array("userName" => $uid));
	
	echo $uid.'<br>';
	echo $pw;
	
	if ($data['password'] == $pw)
	{
		$_SESSION['authenticate'] = true;
		header('Location: shell.php#tab1?'.$pw);
	}
	else
	{
		$_POST['uid'] = "";
		header('Location: login.php');
	}
	
	if ($_POST['uid'] == '' || $_POST['pw'] == '')
		header('Location: login.php');

?>