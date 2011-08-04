<?php
	#session_start();
	
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->players;
	
	$team = $_POST['teamid'];
	$name = $_POST['playerName'];
	$number = $_POST['playerNumber'];
	$obj = array("teamid"=>$team, "playerName"=>$name, "playerNumber"=>$number);
	$c->insert($obj);
	
	
	
	
	header('Location: shell.php#tab2')

?>
