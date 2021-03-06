		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link type="text/css" href="css/start/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){
				// Accordion
				$("#accordion").accordion({ header: "h3" });
					
				// Tabs
				$('#tabs').tabs();

				
				//$('#tabs').tabs();
				if(document.location.hash!='') {
					$("tabs").tabs('select',document.location);}

				
				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});
				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});			
				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});
				// Progressbar
				$("#progressbar").progressbar({
					value: 20 
				});
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
			});
		</script>
		
		<script type="text/javascript" charset="utf-8">
			$(function()
			{
		  		$("select#ctlGame").change(function()
		  		{  	  	
		  			$("select#ctlPlayer").html('<option value=""></option>');
		  			$("select#ctlStat").html('<option value=""></option>');
				    $.get("selectProc.php", { id: $("#ctlGame").val()},  function(data){
				    	$("select#ctlTeam").html(data);
				    });
			 	})
			})
			
			$(function()
			{
		  		$("select#ctlTeam").change(function()
		  		{  	  		
		  			$("select#ctlStat").html('<option value=""></option>');
				    $.get("selectProc2.php", { id: $("#ctlTeam").val()},  function(data){
				    	$("select#ctlPlayer").html(data);
				    });
			 	})
			})
			
			$(function()
			{
		  		$("select#ctlPlayer").change(function()
		  		{  	  		
				    $.get("selectProc3.php", { id: $("#ctlPlayer").val()},  function(data){
				    	$("select#ctlStat").html(data);
				    });
			 	})
			})
		</script>
		
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	