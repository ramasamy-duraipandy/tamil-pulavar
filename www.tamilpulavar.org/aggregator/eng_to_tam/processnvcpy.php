<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Normal_verb</title>
</head>
<body>
<?php
include("fns.php");
$v					=	"சேர்ந்தேன்";
$v_en				 =	T2R($v);
$tense				=	array(4=>"கொண்டிருக்",5=>"கொண்டிருந்",6=>"கொண்டிருப்",10=>"கொண்டிருந்திருக்",11=>"கொண்டிருந்திருந்",
								 12=>"கொண்டிருந்திருப்",7=>"இருக்கின்",8=>"இருந்",9=>"இருப்");
$mey				  =	array("_N","_L","_y","_r","_Z","_V","_l");
$person_key	       =	array("f_p_s" =>"E_V","f_p_p"=>"O_m","s_p_s"=>"A_y","s_p_p_2"=>"a_rka_L","t_pm_s"=>"A_V","t_pf_s"=>"A_L","t_p_p_2"=>"a_rka_L",
								 "t_pit_s"=>"atu","t_pit_p"=>"aVa");
$s_t				  = 	array(1=>"kiR",3=>"v",3=>"p");	
//$l_p3				  =	   substr($v_en,-3);
$f_v0				 = 	substr($v_en,0,-4);
$f_v1				 = 	substr($v_en,0,-3);
$f_v2				 =	substr($f_v1,-1);
$char				 =	substr($f_v0,-2);
//$f_v				  = 	substr($v_en,0,-4);
if($f_v2 == "V")
{
$f_v				  = 	substr($v_en,0,-4);
if(substr($f_v,-1) == 'i' )
{
$f_v				  = 	substr($f_v,0,-1)."u";
echo R2T($f_v);
}
}
if(!isset($f_v))
{
if($char == "_n" || $char == "_t")
{
$f_v				=	substr($f_v0,0,-2);
echo R2T($f_v);
}
elseif(substr($f_v0,-2) == "_T")
{
$f_v				=	str_replace("_T","Tu",$f_v0);
echo R2T($f_v);
}
else
echo R2T($f_v0);
}

/* $v_p				  =	array_search($l_p3,$person_key);
foreach($tense as $t)
{	
$pos				  =	strpos($v,$t);
if($pos	=== false)
{	
}
else
{
	$t_no			 =	array_search($t,$tense);
	$t_fv			 =	substr($v,0,$pos);
	$tf_en			=	T2R($t_fv);
	if($t_no >=4 || $t_no >=6 || $t_no >=10 || $t_no >=12)
	{
		if(substr($tf_en,-2) == "_k")
		{
		$tf_en		=	substr($tf_en,0,-2);
		}
	}
	$l_2			  =	substr($tf_en,-2);
	$l_1			  =	substr($tf_en,-1);
	if($l_2 == "tu")
	{
		$l_2		  =	substr($tf_en,-4,2);
		if($l_2 == "_t")
		$f_v		  =	substr($tf_en,0,-4);
		elseif($l_2 == "_n")
		$f_v		  =	substr($tf_en,0,-4);
		else
		$f_v		  =	substr($tf_en,0,-2);
	}
	elseif($l_1 == "i")
	$f_v		  =	$tf_en;
	else
	$f_v			 =	str_replace("_TTu","Tu",$tf_en);
	echo R2T($f_v);
}						 
}
if(!isset($f_v))
{
	foreach($s_t as $s_tw)
	{
		$pos			=	strpos($v_en,$s_tw);
		if($pos	===	false)
		{
		}
		else
		{
			$t_no	=	array_search($s_tw,$s_t);
			$t_fv	=	substr($v_en,0,$pos);
			if($t_no	==	1)
			{
				if(substr($t_fv,-2)	==	"_k")
				$t_fv	=	substr($t_fv,0,-2);
				else
				$tf_en	=	$t_fv;
			}
			echo R2T($tf_en);
		}
	
	}
}*/
?>
</body>
</html>