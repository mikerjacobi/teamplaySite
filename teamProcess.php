<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	$obj = array("teamName"=>$_POST['teamName'], "sport"=>$_POST['sport'], "color1"=>$_POST['primaryColor'], "color2"=>$_POST['secondaryColor'], "players"=>array() );
	$c->insert($obj);
	
	header('Location: shell.php#tab2')

?>