<form method="post" action="leagueScript.php" onclick="document.location = 'shell.php#tab2'">
	<select name="sport">
	  	<option>Soccer</option>
	  	<option>Basketball</option>
	</select>
	<input type="text" size="25" name = "league_name" value="League Name">
	<input type="submit" id="submit1" name="Submit" value="Add League">
</form>

<?php 

	mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
	mysql_select_db("test") or die(mysql_error());
	$result = mysql_query("SELECT * FROM league");	

	while($row = mysql_fetch_array($result)){
		echo $row['league_id'].": ".$row['sport']. " - ". $row['league_name'];
		echo "<br />";
	}
?>
