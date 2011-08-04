<html>

<head>
	<?php 
		include("header.php");
	?>
	
	<style 'type=text/css'>
		form {
		display: inline;
		}
	</style>
</head>

<body  bgcolor="Silver">

<div id="tabs" >
	<ul>
			 <li><a href="#tab1">Home</a></li>
			 <li><a href="#tab2">Team </a></li>
			 <li><a href="#tab3">Game</a></li>
			 <li><a href="#tab4">Stats</a></li>
	</ul>
	<div id='tab1'> <?php include('hometab.php'); ?> </div>
	<div id='tab2'> <?php include('team.php'); ?> </div>
 	<div id='tab3'>  <?php include('game.php'); ?> </div>	
	<div id='tab4'> holder </div>	
</div>

</body>

