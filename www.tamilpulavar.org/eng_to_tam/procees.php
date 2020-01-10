
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>procees</title>
</head>
<body>
<?php
include("fns.php");
$txt			=	"அரத்தை";//$_POST["cntnt"];
$g_split		=	explode(" ",$txt);
foreach($g_split as $wrd)
{
	$wrds[]	 =	T2R($wrd);
}
//print_r($wrds);
foreach($wrds as $wrd)
{
	if(substr($wrd,-1) == "Y")
	{
		if(substr($wrd,-2) == "yY" )
		$org_wrd		=	substr($wrd,0,-2);
		elseif(substr($wrd,-4) == "_ttY")
		$org_wrd		=	str_replace("_ttY","_m",$wrd);
		elseif(substr($wrd,-4) == "_TTY")
		$org_wrd		=	str_replace("_TTY","Tu",$wrd);
		elseif(substr($wrd,-2) == "vY" && ctype_upper(substr($wrd,-3,1)))
		{
			$org_wrd		=	substr($wrd,0,-2);
		}
		else
		{
				$mei_end		=	array("y","r","Z","N","V","L");
				$e_w			=	substr($wrd,-2);
				$c_w			=	substr($e_w,0,1);
				$org_wrd		=	str_replace($e_w,"_".$c_w,$wrd);
				if(in_array($c_w,$mei_end))
				{
					if(substr($org_wrd,-2) == substr($org_wrd,-4,-2))	
					$org_wrd		=	substr($org_wrd,0,-2);
				}
				else
				$org_wrd		=	str_replace($e_w,$c_w."u",$wrd);
				
		}
		echo R2T($org_wrd);
	}
	
	
}
?>
</body>
</html>