<?php
$con = mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
mysql_select_db("test", $con) or die(mysql_error());

if (!$con)
{
	die('<p> Could not connect: ' . mysql_error().'</p>');
}
else
{
	echo '<p> success'.$_POST["league"].' </p>';	
}

mysql_query("insert into team(league_id, team_name) values ('".$_POST["league"]."', '".$_POST["team_name"]. "');");
mysql_close($con);

header( 'Location: shell.php#tab3' ) ;


?>