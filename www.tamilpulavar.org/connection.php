<?php
mysql_connect("localhost","USERNAME","PASSWORD")or die(mysql_error());
mysql_select_db("ultisg2t_tamdict")or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
error_reporting(0);
?>
