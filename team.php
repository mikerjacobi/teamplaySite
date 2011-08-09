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
	
	<select name="teamid">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select>
	<input type="text" size="15" name = "playerName" value="Player_Name">
	<input type="text" size="15" name = "playerNumber" value="Player_Number">
	<input type="checkbox" name="coach" value="true" />
	
	<input type="submit" id="createPlayer" name="Submit" value="Create Player">
	
</form>

<br><br><br>

<form name="viewTeam" method="post" action="viewTeamProcess.php">
	<select name="teamid" onchange="viewTeam.submit();">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			echo '<option> View Team</option>';
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select>
</form>	

<?php 
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->team;
	
	if (!empty($_SESSION['teamName']))
	{
		$data = $c->findOne(array("_id" => new MongoId($_SESSION['teamName'])));
		echo '<br><b>'.$data['teamName'] . ':</b><br>';
		echo '<br>';
		
		$c = $db->players;
		$data = $c->find(array("teamid" => $_SESSION['teamName']));
		
		foreach ($data as $ele){
		    echo $ele['playerName']. ': '. $ele['playerNumber'] . '<br>';
		}	
	}

?>

