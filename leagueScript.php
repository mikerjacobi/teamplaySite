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

mysql_query("insert into league(sport, league_name) values ('".$_POST["sport"]."', '".$_POST["league_name"]. "');");
mysql_close($con);

header( 'Location: shell.php#tab2' ) ;



?>