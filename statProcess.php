<?php
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->stat;
		
	$where = array("game"=>$_POST['gid'], "team"=>$_POST['tid'], "player"=>$_POST['pid']);
	$with = array('$inc'=>array($_POST['sid']=>1));
	$c->update($where, $with, true);
	
	header('Location: shell.php#tab3');
?>