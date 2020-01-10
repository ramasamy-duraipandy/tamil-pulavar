<?php
/*--------------------------------------------------------------------------------------------
|	@desc:		simple php pagination
|	@author:	Aravind Buddha
|	@url:		http://www.techumber.com
|	@date:		12 August 2012
|   @email       aravind@techumber.com
|	@license:	Free!, to Share,copy, distribute and transmit , 
|               but i'll be glad if i my name listed in the credits'
---------------------------------------------------------------------------------------------*/
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "ultisg2t_root1";			//your mysql user name
$mysql_password = "root1";			//your mysql password
$mysql_database = "ultisg2t_tamdict";	//your mysql database

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Error on database connection");

mysql_query("SET NAMES 'utf8'");









