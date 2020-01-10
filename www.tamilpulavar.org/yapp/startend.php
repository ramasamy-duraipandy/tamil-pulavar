<?php
include("../connection.php");
include("transliterate.php");
$src		=	$_POST['wrd'];
$search	 =	trim(T2R($src));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_POST['val']; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-4 col-xs-12">
<table class=" table table-responsive table-striped table-bordered">
<tr class="success"><td>
<h3><?php echo $src;?>  தொடங்கும் சொற்கள்</h3>
</td></tr>
<tr><td>
<?php
if(strlen($search) == '4')
$search1	=	$search;
else if(substr($search,-2,1) == '_')
$search1	=	substr($search,0,-2).substr($search,-1);
else
$search1	=	substr($search,0,-1);
$search1	=	str_replace("_","\_",$search1);
//echo "SELECT * FROM `hwrd` WHERE `trans` COLLATE latin1_bin LIKE '$search1%'";
//exit;
$sql	   =	mysql_query("SELECT * FROM `hwrd` WHERE `trans` COLLATE latin1_bin LIKE '$search1%'")or die(mysql_error());
if(mysql_num_rows($sql))
{
while($fet	=	mysql_fetch_array($sql))
{
	echo $fet['hdwrd'];
	echo "<br>";
}
}
else
{
	echo "No Word Found";
}
?>
</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="col-md-4 col-xs-12">
<table class=" table table-responsive table-striped table-bordered">
<tr class="success"><td>
<h3><?php echo $src;?>  இடை சொற்கள்</h3>
</td></tr>
<tr><td>
<?php
//$search;
//exit;
if(strlen($search) == '4')
$search2	=	$search;
else if(substr($search,-2,1) == '_')
$search2	=	$search;
else
$search2	=	substr($search,0,-1);

$sql	=	mysql_query("SELECT * FROM `hwrd` WHERE `trans` COLLATE latin1_bin LIKE '%$search2%' 
						  AND `trans` COLLATE latin1_bin NOT LIKE '%$search' AND `trans` COLLATE latin1_bin NOT LIKE '$search2%'")or die(mysql_error());
if(mysql_num_rows($sql))
{						  
while($fet	=	mysql_fetch_array($sql))
{
	echo $fet['hdwrd'];
	echo "<br>";
}
}
else
{
		echo "No Word Found";

}
?>
</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="col-md-4 col-xs-12">
<table class=" table table-responsive table-striped table-bordered">
<tr class="success"><td>
<h3><?php echo $src;?>  முடியும் சொற்கள்</h3>
</td></tr>
<tr><td>
<?php
if($search[0] == "_")
$search	 =	substr($search,1);
//echo $search;
//exit;
$sql	=	mysql_query("SELECT * FROM `hwrd` WHERE `trans` COLLATE latin1_bin LIKE '%$search'")or die(mysql_error());
if(mysql_num_rows($sql))
{
while($fet	=	mysql_fetch_array($sql))
{
	echo $fet['hdwrd'];
	echo "<br>";
}
}
else
{
	echo "No Word Found";
}
?>
</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
</div>
</body>
</html>