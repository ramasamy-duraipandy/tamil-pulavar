<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>chandi</title>
</head>

<body>
<?php
include("Yappuanalyzer.php");
include("../connection.php");
$sand	=	$_POST['sand'];
$p_p = new Yappuanalyzer($sand);
$seer_detail = $p_p->seeronly();
$qry	=	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `seer` = '$seer_detail'");
while($fet = mysql_fetch_array($qry))
{?>
<form id="myform" method="post" action="common.php">
  <input type="hidden" name="typeahead" value="<?php echo $fet['hdwrd']; ?>" /> 
  <a onclick="document.getElementById('myform').submit();"><?php echo $fet['hdwrd']; ?></a>
</form>
<?php
}
?>
</body>
</html>