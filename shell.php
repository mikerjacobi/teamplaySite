<html>

<head>

		<?php 
			include("header.php"); 
			session_start();
		?>
		<title> TeamPlayer </title>
</head>


<body>

<table border="0" width="100%">
  <tr>
  	<td width="20%"> <?php  print_r($_SESSION); ?> </td>
    <td width="60%">  <?php include("menu.php"); ?> </td>
    <td width="20%"> <?php print_r($_POST); ?> </td>
  </tr>
</table>


</body>
</html>