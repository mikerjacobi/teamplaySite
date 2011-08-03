<?php
$con = mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
mysql_select_db("test", $con) or die(mysql_error());

if (!$con)
{
	die('<p> Could not connect: ' . mysql_error().'</p>');
}
else
{
	echo '<p> success </p>';	
}

//mysql_query("insert into player(league_id, team_id, player_name) values (".$_POST["league"].", ".$_POST["team"]. ", '".$_POST["player_name"]."');");
$_SESSION['league'] = $_POST['league'];
mysql_close($con);

header( 'Location: shell.php#tab4' ) ;



?>