<script type="text/javascript">
	function getTest()
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
		    	document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		    }
		}
		
		xmlhttp.open("GET","ajax_info.txt",true);
		xmlhttp.send();
	}
</script>


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
	
	<input type="text" id="datepicker" name="date" value="date"> <br><br>
	
	<input type="submit" id="createGame" name="Submit" value="Create Game">
	
</form>
<br><br><br>

<form name="gameForm" method="post">

	<label>Add Stats</label> <br><br>
	<label>Select Game</label>
	<select name="game" onChange="gameForm.submit();">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->game;
			
			$cursor = $c->find();
			
			
			echo '<option value="">'. ' </option> <br>';
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['date'].': '.$obj['homeTeam'].' vs. '.$obj['awayTeam']. ' </option> <br>';
			}
		?>
	</select> 
	
</form> <br>
<form name="teamForm" method="post">
	
	<label>Team</label>
	<select name="team" onChange="teamForm.submit();">
		<?php		
			
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->game;
			
			$game = $c->findOne(array('_id' => new MongoId($_POST['game']))); 
			echo '<option value="">'. ' </option> <br>';
			echo '<option value='.$game['homeTeam'].'>'.$game['homeTeam'].' </option> <br>';
			echo '<option value='.$game['awayTeam'].'>'.$game['awayTeam'].' </option> <br>';
		?>
	</select> 
	
</form>

<form name="teamForm" method="post">
	
	<label>Team</label>
	<select name="team" onChange="teamForm.submit();">
		<?php		
			
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->game;
			
			$team = $c->findOne(array('_id' => new MongoId($_POST['team']))); 
			
			
			echo '<option value="">'. ' </option> <br>';
			foreach ($team['players'] as $player) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['date'].': '.$obj['homeTeam'].' vs. '.$obj['awayTeam']. ' </option> <br>';
			}
		?>
	</select> 
	
</form>










