<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>சந்தங்கள்</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <table class="table" style="table-layout:1px;" >
 <tr>
 <td>
<?php
include("Yappuanalyzer.php");
include("transliterate.php");
include("../connection.php");
$sand	=	$_POST['sand'];
$sand_a  =	explode(" ",$sand);
//print_r($sand_a);
//exit;
foreach($sand_a as $sand_s)
{
echo "<td>";
$p_p 		 	  = new Yappuanalyzer($sand_s);	
$seer_detail 	  = $p_p->seeronly();
$asai_detail 	  = $p_p->DisplaySyllableWordClass();
echo $asai_detail;
$end_char		 = substr(T2R($sand_s),-1);
//echo $end_char;
//$end_char	= substr(,-1);
//echo $sand_s;
//exit;
//echo 
//AND BINARY SUBSTRING(`trans`,-1) = '$end_char' LIMIT 4
$qry	=	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `seer` = '$seer_detail' AND (BINARY SUBSTRING(`trans`,-1) = '$end_char' OR BINARY SUBSTRING(`trans`,-2,1) = '_') ORDER BY rand() LIMIT 6");
while($fet = mysql_fetch_array($qry))
{
	$fet_wrds[]	=	$fet['hdwrd'];
}
shuffle($fet_wrds);
foreach($fet_wrds as $fet_wrd)
{	
?>
<a href="run.php?val=<?php echo $fet_wrd; ?>"><?php echo $fet_wrd; ?><br /></a>
<?php
}
unset($fet_wrds);
//echo $seer_detail;
echo "</td>";
}
?>
<br>
</td>
</tr>
</table>
<form method="post" id="myf" name="myf" target="_blank" action="yapp/chandom1.php" >
<input type="hidden" name="sand" value="<?php echo $sand; ?>"  />
<a onclick="document.getElementById('myf').submit();" style="cursor:pointer;">மேலும்....</a>
</form>
<br /><br /><br /><br /><br />
</body>
</html>