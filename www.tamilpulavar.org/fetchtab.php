<?php
include("connection.php");
include("eng2eng.php");
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
$tab    = 	$_POST["table"];
if(strpos($tab, 'http') !== false) 
{
	fetch_freedict($tab,$val);
}
elseif($tab == "tam_com")
{
	call_comwrd($val);
}
else
{
        echo '<h4 class="text-center text-success" style="font-size: 150%; font-weight: bold;">'.$val.'</h4>';
	if($val != "")
	{
		$qry	=	mysql_query("SELECT `meaning` FROM `synonym` WHERE `tword` = '$val'")or die(mysql_error());
		$fet	=	mysql_fetch_array($qry);
		$val_m 	= 	$fet['meaning'];
		if($val != "")
		{
			echo "<br><br><div class='row'><div class='col-md-3 col-md-offset-5'><table border='1' class='table table-responsive table-striped '><tr>
			<td><h4 style='color:#f45013;'>synonyms</h4></td>";
			echo "<td>".$val_m."</td></tr></table></div></div>";
		}
		else
		{
			echo "<br><br><div class='row'><div class='col-md-3 col-md-offset-5'><table border='1' class='table table-responsive table-striped '><tr>
			<td><h4 style='color:#f45013;'>synonyms</h4></td>";
			echo "<td>தேடும் சொல் இந்த அகராதியில் இல்லை</td></tr></table></div></div>";
		}
		$qry1	=	mysql_query("SELECT `meaning` FROM `antonyms` WHERE `tword` = '$val' AND `admin_checked`='1'")or die(mysql_error());
		$fet1	=	mysql_fetch_array($qry1);
		$val1 	= 	$fet1['meaning'];
		$qry_syn_an = mysql_query("SELECT `meaning` FROM `kazhakam` WHERE `tword` = '$val1'")or die(mysql_error());
		$fet_syn_an	=	mysql_fetch_array($qry_syn_an);
		$count_syn_an  =    mysql_num_rows($qry_syn_an);
		$val_syn_an 	= 	$fet_syn_an['meaning'];
		
		
		$qry_syn_an1 	= 	mysql_query("SELECT `meaning` FROM `tamtam` WHERE `tword` = '$val1'")or die(mysql_error());
		$fet_syn_an1	=	mysql_fetch_array($qry_syn_an1);
		$count_syn_an1  =    mysql_num_rows($qry_syn_an1);
		$val_syn_an1 	= 	$fet_syn_an1['meaning'];
		
		if($val1 != "")
		{
			echo "<br><br><div class='row'><div class='col-md-3 col-md-offset-5'><table border='1' class='table table-responsive table-striped '><tr>
			<td><h4 style='color:#f45013;'>Antonyms</h4></td>";
			echo "<td>".$val1;
			if($count_syn_an != 0)
			{
				echo "<br>".$val_syn_an;
			}
			elseif($count_syn_an1 != 0)
			{
				echo "<br>".$val_syn_an1;
			}
			echo "</td></tr></table></div></div>";
			
			
			
	
		}
		else
		{
			echo "<br><br><div class='row'><div class='col-md-3 col-md-offset-5'><table border='1' class='table table-responsive table-striped '><tr>
			<td><h4 style='color:#f45013;'>Antonyms</h4></td>";
			echo "<td>தேடும் சொல் இந்த அகராதியில் இல்லை</td></tr></table></div></div>";
		}
	}
	else
	{
			echo "<br><br><div class='row'><div class='col-md-5 col-md-offset-4'>
			<h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை</h4>";
			echo "</div></div>";
	}
}

?>

</body>
</html>