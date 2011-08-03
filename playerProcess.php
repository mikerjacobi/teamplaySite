<?php
	#session_start();
	
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	#$_SESSION['teamName'] = $_POST['teamName'];
	
	$cursor = $c->find(array("teamName"=>$_POST['teamName']));
	$teamData = $cursor->getNext();
	$players = $teamData['players'];
		
	foreach ($teamData as $ele){
	    echo $ele.'<br>';
	}

	
	$new = array("playerName"=>$_POST['playerName'], "playerNumber"=>$_POST['playerNumber']);
	array_push($players, $new);
	$c->update(array("teamName"=>$_POST['teamName']), array('$set'=>array('players'=>$players)));
	
	
	
	header('Location: shell.php#tab2')

?>
