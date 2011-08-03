<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->game;
	
	$obj = array("homeTeam"=>$_POST['team1'], "awayTeam"=>$_POST['team2'], "date"=>$_POST['date']);
	$c->insert($obj);
	
	header('Location: shell.php#tab3')

?>
