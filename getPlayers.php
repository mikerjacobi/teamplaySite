<?php
	$team = $_GET['team'];
	
	
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	$teamData = $c->findOne(array("teamName" => $team));
	$teamid = $teamData['_id'];
	$c = $db->players;
	$players = $c->find(array("teamid" => (string)$teamid));
	//$players = $c->find();
	
	foreach ($players as $player) 
	{
		echo $player['playerNumber'].": ".$player['playerName'].',';
	}
?>