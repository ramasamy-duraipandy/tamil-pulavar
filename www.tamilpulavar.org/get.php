<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>get</title>
</head>
<body>
<?php
ini_set('max_execution_time', 0);
mysql_connect("localhost","root","");
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");
$qry = mysql_query("SELECT `eword` FROM `word` WHERE `eword` LIKE 'w%' AND `eword` NOT LIKE 'wrd%' AND `eword` NOT IN (SELECT `eword` FROM `palsdict` WHERE`eword` LIKE 'w%')");
while($fet	=	mysql_fetch_array($qry))
{
$ewords[]	=	$fet['eword'];
}
//print_r($ewords);
//exit;
//$i=1;
for($i=0;$i<count($ewords);$i++)
{
	$url	=	"http://www.tamilvu.org/slet/pmdictionary/palsfse.jsp?serword=$ewords[$i]";
	$cnt	=	file_get_contents($url);
	$resp   =	$http_response_header;
	$pos	=	strpos($cnt,"The word not found in Dictionary");
	$he	 =	strpos($cnt,"<HE>");	
	//echo $resp[0];
	//exit;
	if($he === false)
	{
	}
	elseif($resp[0] != "HTTP/1.1 200 OK")
	{
		$i = $i-1;
		continue;
	}
	elseif($pos === false)
	{
	$pos1 = strpos($cnt,"<HE>");
	$pos2 = strrpos($cnt,"</tr>");	
	$txt  = substr($cnt,$pos1,$pos2);
	$pos4 = strpos($txt,'<b>');
	$txt  = substr($txt,$pos4);
	$txt  = str_replace($ewords[$i],"",$txt);
	$txt  = str_replace("&nbsp;","",$txt);
	$txt  = strip_tags($txt);
	$txt  = trim($txt);	
	$txt  = mysql_real_escape_string($txt);
	//$txt  = str_replace("\r","",$txt);
	mysql_query("INSERT INTO `palsdict` (`sno`,`eword`,`meaning`) values ('','$ewords[$i]','$txt')")or die(mysql_error());
	//echo $txt; 
	//echo "</br>";
	/*if($i==10)
	exit;
	else
	$i++;*/
	echo $i;
	echo "<br>";
	//$i++;
	}
	
}
?>
</body>
</html>