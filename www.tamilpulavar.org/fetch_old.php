<?php
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fetch</title>
</head>
<body>
<?php
$val	=	$_POST["val"];
$qry	=	mysql_query("SELECT `meaning` FROM `kazhakam` WHERE `tword` = '$val'")or die(mysql_error());
$qry1	=	mysql_query("SELECT `meaning` FROM `chennai_tt` WHERE `tword` = '$val'")or die(mysql_error());
$qry2	=	mysql_query("SELECT `meaning` FROM `isaitam` WHERE `tword` = '$val'")or die(mysql_error());
$qry3	=	mysql_query("SELECT `meaning` FROM `david` WHERE `tword` = '$val'")or die(mysql_error());
$qry4	=	mysql_query("SELECT `meaning` FROM `kadir` WHERE `tword` = '$val'")or die(mysql_error());
$qry5	=	mysql_query("SELECT `meaning` FROM `tamtam` WHERE `tword` = '$val'")or die(mysql_error());
$qry6	=	mysql_query("SELECT `meaning` FROM `winslow` WHERE `tword` = '$val'")or die(mysql_error());
$qry7	=	mysql_query("SELECT `meaning` FROM `fabricius` WHERE `tword` = '$val'")or die(mysql_error());
$fet	=	mysql_fetch_array($qry);
$fet1	=	mysql_fetch_array($qry1);
$fet2	=	mysql_fetch_array($qry2);
$fet3	=	mysql_fetch_array($qry3);
$fet4	=	mysql_fetch_array($qry4);
$fet5	=	mysql_fetch_array($qry5);
$fet6	=	mysql_fetch_array($qry6);
$fet7	=	mysql_fetch_array($qry7);
$val  =    $fet['meaning'];
$val1  =    $fet1['meaning'];
$val2 =    $fet2['meaning'];
$val3 =    $fet3['meaning'];
$val4 =    $fet4['meaning'];
$val5  =    $fet5['meaning'];
$val6  =    $fet6['meaning'];
$val7  =    $fet6['meaning'];
echo "<br />";

if($val!="")
{
	echo "<div class='row'><div class='col-md-6'><table  class='table table-responsive table-striped table-bordered '><tr><td><h4 style='color:#f45013;'>kazhakam</h4></td></tr>";
	echo "<tr><td>".$val."</td></tr></table></div>";
}
if($val1!="")
{
	echo "<div class='col-md-6'><table  class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#f376a0;' class='glyphicon-bold'>University of Madras Lexicon</h4></td></tr>";
	echo "<tr><td>".$val1."</td></tr></table></div></div>";
}
if($val2!="")
{
	echo "<div class='row'><div class='col-md-6'><table class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#6b6d9d;' class='glyphicon-bold'>Isaitamil</h4></td></tr>";
	echo "<tr><td>".$val2."</td></tr></table></div>";
}
if($val3!="")
{
	echo "<div class='col-md-6'><table  class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#858585;' class='glyphicon-bold'>David McAlpin - A Core vocabulary for Tamil</h4></td></tr>";
	echo "<tr><td>".$val3."</td></tr></table></div></div>";
}
if($val4!="")
{
	echo "<div class='row'><div class='col-md-6'><table class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#007676;' class='glyphicon-bold'>Kadir</h4></td></tr>";
	echo "<tr><td>".$val4."</td></tr></table></div>";
}
if($val5!="")
{
	echo "<div class='col-md-6'><table class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#00a5a5;' class='glyphicon-bold'>தமிழ் தமிழ் அகரமுதலி</h4></td></tr>";
	echo "<tr><td>".$val5."</td></tr></table></div></div>";
}
if($val6!="")
{
	echo "<div class='row'><div class='col-md-6'><table class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#494949;' class='glyphicon-bold'>Miron Winslow </h4></td></tr>";
	echo "<tr><td>".$val6."</td></tr></table></div>";
}
if($val7!="")
{
	echo "<div class='col-md-6'><table class='table table-responsive table-striped table-bordered'><tr><td><h4 class='' style='color:#009201;' class='glyphicon-bold'>J.P.Fabricius Tamil and English Dictionary </h4></td></tr>";
	echo "<tr><td>".$val7."</td></tr></table></div></div>";
}
echo "</div>";
?>
</body>
</html>