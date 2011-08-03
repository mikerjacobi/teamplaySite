<p>
<?php
mysql_connect("localhost", "admin", "") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());
$result = mysql_query("SELECT * FROM table1");

//$row = mysql_fetch_array( $result );

while($row = mysql_fetch_array($result)){
	echo $row['a']. " - ". $row['b'];
	echo "<br />";
}

?>
</p>