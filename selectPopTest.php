<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="css/start/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" charset="utf-8">
	$(function()
	{
  		$("select#ctlGame").change(function()
  		{  	  	
  			$("select#ctlPlayer").html('<option value=""></option>');
		    $.get("selectProc.php", { id: $("#ctlGame").val()},  function(data){
		    	$("select#ctlTeam").html(data);
		    });
	 	})
	})
	
	$(function()
	{
  		$("select#ctlTeam").change(function()
  		{  	  		
		    $.get("selectProc2.php", { id: $("#ctlTeam").val()},  function(data){
		    	$("select#ctlPlayer").html(data);
		    });
	 	})
	})
</script>
</head>
<body>
	<select name="gid" id="ctlGame">
		<?php
			$m = new Mongo('localhost', 27017);
			$db = $m->teamplayer;
			$c = $db->games;
			
			$cursor = $c->find();
			
			echo '<option value="">'. ' </option> <br>';
			foreach ($cursor as $obj) 
			{
				echo '<option value='.$obj['_id'].'>'.$obj['date'].': '.$obj['homeTeam'].' vs. '.$obj['awayTeam']. ' </option> <br>';
			}
		?>
	</select> 
	<select name="tid" id="ctlTeam">
		<option value=""></option> 
	</select> 
	
	<select name="pid" id="ctlPlayer">
		<option value=""></option> 
	</select> 
</body>

</html>




