<?php
	session_start();  
	
	//header( 'Location: sessionCheck.php' ) ;
	
	$con = mysql_connect("localhost", "mike", "shadow") or die(mysql_error());
	mysql_select_db("test", $con) or die(mysql_error());
	if (!$con)
	{
		die('<p> Could not connect: ' . mysql_error().'</p>');
	}
	
	
	
	if ($_POST['Submit'] == "Add Coach")
	{
		mysql_query("insert into coach(league_id, team_id, coach_name) values (".$_SESSION["league"].", ".$_POST["team"]. ", '".$_POST["coach_name"]."');");
		$_SESSION['current'] = "";
		header( 'Location: shell.php#tab4' ) ;
		
	}
	elseif ($_SESSION['current'] == "coach")
	{
	    $_SESSION['league'] = $_POST['league'];
	    $_SESSION['current'] = "null";
	    header('Location: shell.php#tab4');
	}
	

	
	//mysql_close($con);
?>