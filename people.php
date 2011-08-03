<form method="post" action="coachScript.php">
	<select name="league">
		<?php 
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			$result = mysql_query("SELECT * FROM league");
						
			while($row = mysql_fetch_array($result))
			{
				echo '<option value='.$row['league_id'].'>'.$row['league_name'].' </option> <br>';
			}
		
		?>
	</select>
	
	<select name="team">
		<?php 		
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			$result = mysql_query("SELECT * FROM team");
		
			while($row = mysql_fetch_array($result))
			{
				echo '<option value='.$row['team_id'].'>'.$row['team_name'].' </option> <br>';
			}
		
		?>
	</select>
	
	<input type="text" size="25" name = "coach_name" value="Coach Name">
	<input type="submit" id="submit1" name="Submit" value="Add Coach">
</form>

<br><br>



<?php 

		mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
		mysql_select_db("test") or die(mysql_error());
		$result = mysql_query("SELECT * FROM coach");	
	
		while($row = mysql_fetch_array($result)){
			echo $row['league_id'].", ".$row['team_id']. ": ". $row['coach_id'].", ".$row['coach_name'];
			echo "<br />";
		}
	?>

<br><br>

	
<form method="post" action="playerScript.php">
	<select name="league">
		<?php 
		
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			$result = mysql_query("SELECT * FROM league");
						
			while($row = mysql_fetch_array($result))
			{
				echo '<option value='.$row['league_id'].'>'.$row['league_name'].' </option> <br>';
			}
		
		?>
	</select>
	
	<select name="team">
		<?php 		
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			$result = mysql_query("SELECT * FROM team");
		
			while($row = mysql_fetch_array($result))
			{
				echo '<option value='.$row['team_id'].'>'.$row['team_name'].' </option> <br>';
			}
		
		?>
	</select>
	
	<input type="text" size="25" name = "player_name" value="Player Name">
	<input type="submit" id="submit1" name="Submit" value="Add Player">
</form>
<br><br>

<?php 

		mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
		mysql_select_db("test") or die(mysql_error());
		$result = mysql_query("SELECT * FROM player");	
	
		while($row = mysql_fetch_array($result)){
			echo $row['league_id'].", ".$row['team_id']. ": ". $row['player_id'].", ".$row['player_name'];
			echo "<br />";
		}
	?>
