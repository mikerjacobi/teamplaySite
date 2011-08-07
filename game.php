
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
	
	<input type="text" id="datepicker" name="date" value="date">
	
	<input type="submit" id="createGame" name="Submit" value="Create Game">
	
</form>
<br><br><br>


<form name="statForm" method="post" action="statProcess.php">
	<select name="gid" id="ctlGame">
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
	<select name="tid" id="ctlTeam">
		<option value=""></option> 
	</select> 
	
	<select name="pid" id="ctlPlayer">
		<option value=""></option> 
	</select> 
	<select name='sid' id = 'ctlStat'>
		<option value=""></option> 
	</select>
	<input type="submit" name="Submit" value="Increment">
</form>






