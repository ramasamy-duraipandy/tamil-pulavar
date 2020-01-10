<?php
include("../connection.php");
include("transliterate.php");
$val	=	$_POST['wrd'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pazha</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-8 col-md-offset-2 col-xs-12">
<table class=" table table-responsive table-striped table-bordered">
	<tr class="success"><td>
     <strong><?php echo $val; ?> உள்ளடக்கிய பழமொழிகள்</strong>
     </td></tr>
     <tr><td>
<?php
$val1   =	T2R($val);
if(substr($val1,-2,1) == "_")
$val2   =	substr($val1,0,-2).substr($val1,-1);
$qry	=	mysql_query("SELECT * FROM `proverbs` WHERE `literate` COLLATE latin1_bin LIKE '%$val2%' AND `literate` NOT LIKE '%_$val2%' OR `literate` COLLATE latin1_bin LIKE '%$val1%' AND`admin_checked`='1'") or die(mysql_error());	
/*$qry	=	mysql_query("SELECT * FROM `proverbs` WHERE `literate` COLLATE latin1_bin LIKE '$val1%' OR `literate` COLLATE latin1_bin LIKE '%$val1%' 
						  OR `literate` COLLATE latin1_bin LIKE '%$val1' AND `admin_checked`='1'") or die(mysql_error());*/
if(mysql_num_rows($qry))
{
	while($fetch  =	mysql_fetch_array($qry))
	{
		echo $fetch['proverb'];
		echo "<br><br>";
	}
}
else
{
	echo "No Proverbs Found";
}
?>
</td>
</tr>
</table>
<br />
<p>(இந்தப் பழமொழிகள் யாரையும் எவ்விதத்திலும் புண்படுத்துவதற்கானது அல்ல, ஒரு சமூகவியல் ஆய்வு நோக்கிற்காகவே தொகுப்புகளில் இருந்து இணைக்கப்பட்டுள்ளன.)</p>
<br />
<br />
<br />
<br />
</div>
</body>
</html>