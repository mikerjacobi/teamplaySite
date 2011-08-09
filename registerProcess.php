<?php

	$uid = md5($_POST['uid']);
	$pw = md5($_POST['pw']);
	$coach = $_POST['coach'];
	
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->creds;
	
	$obj = array("userName"=>$uid, "password"=>$pw, "coach"=>$coach);
	$c->insert($obj);

	header( 'Location: login.php' ) ;

?>