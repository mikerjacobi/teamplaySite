<form method="post" action="gameProcess.php">

	<label>Schedule Game</label> <br><br>
	<label>Home Team</label>
	<select name="team1">
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
	
	<label>Away Team</label>
	<select name="team2">
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
	
	<input type="text" id="datepicker" name="date"> <br><br>
	
	<input type="submit" id="createGame" name="Submit" value="Create Game">
	
	
</form>