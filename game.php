
<form method="post" action="gameProcess.php">

	<label>Schedule Game:</label> <br>
	<label>Home Team</label>
	<select name="team1">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['teamName'].','.$obj['_id'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select> 
	
	<label>Away Team</label>
	<select name="team2">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->team;
			
			$cursor = $c->find();
			
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['teamName'].','.$obj['_id'].'>'.$obj['teamName'].' </option> <br>';
			}
		?>
	</select> 
	
	<input type="text" id="datepicker" name="date" value="date"> <br>
	
	<input type="submit" id="createGame" name="Submit" value="Create Game">
	
</form>
<br><br><br>

<form name="gameForm" method="post">

	<label>Add Stats:</label> <br>
	<label>Select Game</label>
	<select name="game" onChange="gameForm.submit();">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->games;
			
			$cursor = $c->find();
			
			
			echo '<option value="">'. ' </option> <br>';
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['date'].': '.$obj['homeTeam'].' vs. '.$obj['awayTeam']. ' </option> <br>';
			}
		?>
	</select> 
	
</form>
<form name="teamForm" method="post">
	
	<label>Team</label>
	<select name="team" onChange="teamForm.submit();">
		<?php		
			
			$_SESSION['game'] = $_POST['game'];
		
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->games;
			
			$game = $c->findOne(array('_id' => new MongoId($_POST['game']))); 
			echo '<option value="">'. ' </option> <br>';
			echo '<option value='.$game['homeid'].'>'.$game['homeTeam'].' </option> <br>';
			echo '<option value='.$game['awayid'].'>'.$game['awayTeam'].' </option> <br>';
		?>
	</select> 
	
</form>

<form name="playerForm" method="post">
	
	<label>Player</label>
	<select name="player" onChange="playerForm.submit();">
		<?php		
			
			$_SESSION['team'] = $_POST['team'];
		
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->players;
			
			$players = $c->find(array('teamid' => $_POST['team'])); 
			
			
			echo '<option value="">'. ' </option> <br>';
			foreach ($players as $player) 
			{
				echo '<option value='.$player['_id'].'>'. $player['playerNumber'].': '.$player['playerName']  .' </option> <br>';
			}
		?>
	</select> 
	
</form><br>

<?php 
	$_SESSION['player'] = $_POST['player'];
		
	$m = new Mongo('localhost', 27017);
	$db = $m->teamplayer;
	$c = $db->players;
	
	$player = $c->findOne(array('_id' => new MongoId($_POST['player'])));
	echo "<b>".$player['playerName'].": </b>";

?>
<form name="statForm" method="post" action="statProcess.php">
	<input type="text" id="statistic" value="stat">
	<input type="text" id="value" value="value">
	<input type="submit" id="createGame" name="Submit" value="Update!">
</form>






