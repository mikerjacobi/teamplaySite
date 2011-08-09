<?php
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;

	$teams = $c->find();
	
	foreach ($teams as $team) 
	{
		echo $team['teamName'].',';
	}
?>