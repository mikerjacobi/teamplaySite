<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	$cursor = $c->find();
	
	foreach ($cursor as $obj) 
	{
    	echo $obj["teamName"] . ': ' . $obj["sport"] . "<br>";
	}

?>