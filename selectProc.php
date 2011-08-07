<?php
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	
	$c = $db->games;
	$mongoId = $_GET['id'];
	$data = $c->findOne(array("_id" => new MongoId($mongoId)));
	echo '<option> </option> <option value="'.$data['homeid'].'">'.$data['homeTeam'].'</option> <option value="'.$data['awayid'].'">'.$data['awayTeam'].'</option>';
?>
