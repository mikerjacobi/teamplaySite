
<form method="post">
	<select name="player" onchange="this.form.submit();">
		<?php 
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			$result = mysql_query("SELECT * FROM player");
			echo '<option value=""> Select Player </option> <br>';
			
			
			while($row = mysql_fetch_array($result))
			{
				echo '<option value='.$row['player_id'].'>'.$row['player_name'].' </option> <br>';
			}
		
		?>
	</select>
	
	<select name="stats" onchange="this.form.submit();">
		<?php 
			mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());
			
			if ($_POST['player']!='')
			{
				$result = mysql_query("SELECT * FROM player where player_id = ".$_POST['player']);
				echo '<option value=""> test </option> <br>';
				
				
				while($row = mysql_fetch_array($result))
				{
					echo '<option value='.$row['player_id'].'>'.$row['player_name'].' </option> <br>';
				}
			}
		?>
	</select>
	
	<?php print_r($_POST); ?>
	
</form>