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
echo "<br />";
echo "<div class='row'><div class='col-md-4 col-md-offset-4'><h4 class='text-center text-success' style='font-size: 150%; font-weight: bold;'>$val</h4></div><br /></div>";
$qry_lst = mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='tam'");
$table_len  =    mysql_num_rows($qry_lst);

$i=0;
$unused_tab = array('antonyms');
while($fet_val = mysql_fetch_assoc($qry_lst))
{
	$table = $fet_val['table_name'];
	if(!in_array($table,$unused_tab))
	{
	$qry	    =	mysql_query("SELECT `meaning` FROM `$table` WHERE `tword` = '$val'")or die(mysql_error());
	$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table'")or die(mysql_error());
	$fet_tabl   =	mysql_fetch_array($qry1);
	$table_name =	$fet_tabl['full_name'];
	$link 	   = 	$fet_tabl['link'];
	if(mysql_num_rows($qry))
	{
		$fet	=	mysql_fetch_array($qry);
		$val_m  =    $fet['meaning'];
		$cont[] = "<div class='col-md-6'><table  class='table table-responsive table-striped table-bordered '><tr><td><a href='$link' target='_blank'><h4 style='color:#f45016;'>$table_name</h4></a></td></tr><tr><td>".$val_m."</td></tr></table></div>";
	}
	else
	{
		$w_cont[] = "<tr><td><a href='$link' target='_blank'>$table_name</a></td></tr>";
	}
	}
		
}
$i=0;
while($i<count($cont))
{
echo "<div class='row'>";
echo $cont[$i].$cont[$i+1];
echo "</div>";
	/*if($z%2)
	{
		echo $cont_value;
	}
	else
	{
		if($z == 1)
		{
			echo "<div class='row'>";
			echo $cont_value;
		}
		else
		{
			echo "</div><div class='row'>";
			echo $cont_value;
		}
	}
	$z++;*/
	$i= $i+2;
}
if($w_cont != "")
{
	echo "<div class='row'><div class='col-md-6'><table  class='table table-responsive table-striped table-bordered '><tr><td><h5 style='color:#f45016;'>Not present in the dictionary  -  தேடும் சொல் இந்த அகராதியில் இல்லை</h5></td></tr>";
	foreach($w_cont as $w_cont_value)
	{
		echo $w_cont_value;
	}
	echo "</table></div><br><br><br><br></div>";
}




	

?>
</body>
</html>