<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->players;
	
	
	$mongoId = $_GET['id'];
	$player = $c->findOne(array("teamid" => $mongoId));
	$sport = $player['sport'];
	$c = $db->sport;
	$stats = $c->find(array("sport" => $sport));
	
	echo '<option> </option>';
	foreach ($stats as $stat){
	    echo '<option value="'.$stat['stats'].'">'.$stat['stats'].'</option>';
	}	
?>