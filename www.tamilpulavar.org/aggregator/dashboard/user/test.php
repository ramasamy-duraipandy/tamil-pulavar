<?php 
error_reporting(0);
include("../../connection.php");
$result = mysql_query("SELECT * FROM `sentance` LIMIT 1000 ");
while($row= mysql_fetch_assoc($result))
{
	echo $row['sentances']."<br>";
}
?>
