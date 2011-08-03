<form method="post" action="teamProcess.php">
	<label>Create Team</label> <br/>
	
	<input type="text" size="15" name = "teamName" value="Team_Name">
	<input type="text" size="15" name = "sport" value="Sport">
	<input type="text" size="15" name = "primaryColor" value="Color1">
	<input type="text" size="15" name = "secondaryColor" value="Color2">
	
	<input type="submit" id="createTeam" name="Submit" value="Create Team">
	
</form>

<br><br><br>

<form method="post" action="playerProcess.php">

	<label>Create Player</label> <br/>
	
	<select name="teamName">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['teamName'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select>
	<input type="text" size="15" name = "playerName" value="Player_Name">
	<input type="text" size="15" name = "playerNumber" value="Player_Number">
	
	<input type="submit" id="createPlayer" name="Submit" value="Create Player">
	
</form>

<br><br><br>

<form method="post" action="viewTeamProcess.php">

	<label>View Team</label> <br/>
	
	<select name="teamName">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['teamName'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select>
	<input type="submit" id="viewTeam" name="Submit" value="View Team">
</form>	

<br><br>

<?php 
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	$data = $c->findOne(array("teamName" => $_SESSION['teamName']));
	echo '<br><b>'.$data['teamName'] . ':</b><br>';
	echo '<br>';
	$players = $data['players'];
	foreach ($players as $ele){
	    echo $ele['playerName']. ': '. $ele['playerNumber'] . '<br>';
	}	
			

?>

