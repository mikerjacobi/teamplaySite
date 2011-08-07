<?php

	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	
	
	
	
	
	$one = explode(',', $_POST['team1']);
	$two = explode(',', $_POST['team2']);
	
	$c = $db->team;
	$data = $c->findOne(array("_id" => new MongoId($one[1])));
	$sport = $data['sport'];
	
	$c = $db->games;
	$obj = array("homeTeam"=>$one[0], "homeid"=>$one[1], "awayTeam"=>$two[0], "awayid"=>$two[1], "date"=>$_POST['date'], "sport"=>$sport);
	$c->insert($obj);
	
	header('Location: shell.php#tab3')

?>
