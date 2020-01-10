<?php

	$hostname = "localhost";
	$username = "ultisg2t_root1";
	$password = "root1";
	$database = "ultisg2t_sentence";


	 $conn = mysql_connect("$hostname","$username","$password") or die(mysql_error());
	mysql_select_db("$database", $conn) or die(mysql_error());

?>