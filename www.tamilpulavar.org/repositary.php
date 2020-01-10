
<?php
include("connection.php");
$val	=	$_POST['val'];
$val	=	mysql_real_escape_string($val);
mysql_query("INSERT INTO `repositary` (`sno`,`word`) values('','$val') ") or die(mysql_error());
?>
