<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->games;
	
	$one = explode(',', $_POST['team1']);
	$two = explode(',', $_POST['team2']);
	
	$obj = array("homeTeam"=>$one[0], "homeid"=>$one[1], "awayTeam"=>$two[0], "awayid"=>$two[1], "date"=>$_POST['date']);
	$c->insert($obj);
	
	header('Location: shell.php#tab3')

?>
