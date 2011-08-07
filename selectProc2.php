<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->players;
	
	
	$mongoId = $_GET['id'];
	$players = $c->find(array("teamid" => $mongoId));
	echo '<option> </option>';
	foreach ($players as $player){
	    echo '<option value="'.$player['_id'].'">'.$player['playerNumber'].': '.$player['playerName']. '</option>';
	}	
?>
