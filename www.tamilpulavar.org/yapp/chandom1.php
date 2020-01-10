<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>சந்தம்</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function writ(ans)
{
		$("#bt").show();
		$("#chk").show();
		ans	= ans+" ";
		$("#chk").append(ans);
		
}
function clr()
{
		$("#chk").empty();
}
</script>
<style>
.nirYasai
	{
		color:#F00;
	}
	.nE_rasai
	{
		color:#00F;
	}
</style>
</head>

<body>
<div class="col-md-12 table-responsive">
<div class="text-center h4">
 சந்தத்திற்குரிய சொற்கள்
</div>
<div id="chk" align="center" style="display:none">

</div>
<div id="bt" style="display:none;">
<button  class="btn btn-success" onclick="clr();">clear</button>
</div>
 <table class="table table-striped " style="table-layout:1px" >
 <tr>
 <td>
<?php
include("Yappuanalyzer.php");
include("transliterate.php");
include("../connection.php");
$sand	=	$_POST['sand'];
//echo $sand;
$sand_a  =	explode(" ",$sand);
$i=0;
foreach($sand_a as $sand_s)
{
echo "<td>";
$p_p = new Yappuanalyzer($sand_s);
$seer_detail = $p_p->seeronly();
$asai_detail = $p_p->DisplaySyllableWordClass();
echo $asai_detail."<br>";
//AND BINARY SUBSTRING(`trans`,-1) = '$end_char'
$end_char		 = substr(T2R($sand_s),-1);
$qry	=	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `seer` = '$seer_detail'");
while($fet = mysql_fetch_array($qry))
{
	$fet_wrds[]	=	$fet['hdwrd'];
}
shuffle($fet_wrds);
foreach($fet_wrds as $fet_wrd)
{
?>
<input type="radio" name="<?php echo $i;?>" onclick="writ('<?php echo $fet_wrd; ?>');"/><a href="../run.php?val=<?php echo $fet_wrd; ?>"><?php echo $fet_wrd; ?><br /></a>
<?php
}
unset($fet_wrds);
//echo $seer_detail;
echo "</td>";
$i++;
}
?>
<br>
</td>
</tr>
</table>
</div>
</body>
</html>