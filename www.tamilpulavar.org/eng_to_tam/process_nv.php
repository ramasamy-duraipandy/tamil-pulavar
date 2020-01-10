<?php
error_reporting(0);
include("fns.php");
include("connection.php");
$sent			     =	$_POST['cntnt'];
$sent				 =	str_replace(".","",$sent);
$sent				 =	ltrim(rtrim($sent));
$exp_v				=	explode(" ",$sent);
$l_w				  =	end($exp_v);
if(count($exp_v) == 3 )
{
	$pos				  =	strpos($l_w,"கொண்டி");
	if($pos	===	false)
	{
	}
	else
	{
		
		$exp_v[1]	.=	$l_w;
		array_pop($exp_v);
	}
}	
//echo $exp_v[1];
//exit;
$v				    =	end($exp_v);
$v_en				 =	T2R($v);
$s					=	$exp_v[0];
$s_en				 =	T2R($s);
if(substr($s_en,-4) == "ka_L")
{
if(!($s == "நாங்கள்" || $s == "நீங்கள்" || $s == "அவர்கள்" || $s=="அவைகள்"))
{			
$plu				  =	1;
$s					=	str_replace("ற்கள்","ல்",$s);
$s					=	str_replace("ட்கள்","ள்",$s);
$s					=	str_replace("ங்கள்","ம்",$s);
$s					=	str_replace("ர்கள்","ன்",$s);
$s					=	str_replace("க்கள்","",$s);
$s					=	str_replace("கள்","",$s);
}
}
$tense				=	array(4=>"கொண்டிருக்",5=>"கொண்டிருந்",6=>"கொண்டிருப்",10=>"கொண்டிருந்திருக்",11=>"கொண்டிருந்திருந்",
								 12=>"கொண்டிருந்திருப்",7=>"இருக்கின்",8=>"இருந்",9=>"இருப்");
$mey				  =	array("_N","_L","_y","_r","_Z","_V","_l");
$person_key	       =	array("f_p_s" =>"E_V","f_p_p"=>"O_m","s_p_s"=>"A_y","s_p_p_2"=>"a_L","t_pm_s"=>"A_V","t_pf_s"=>"A_L","t_p_p_2"=>"a_L",
								 "t_pit_s"=>"atu","t_pit_p"=>"aVa");
$s_t				  = 	array(1=>"kiR");	
$l_p3				 =	substr($v_en,-3);	
$v_p				  =	array_search($l_p3,$person_key);
if($v_p == "")
{
$l_p2 = substr($v_en,-2); 
if($l_p2 == "Va")
$v_p	 =	"t_pit_p";
}
function perfect($t,$ans)
	{
	    if($t == 7 )
		$ans		=	"have ".$ans;
		elseif($t == 9)
		$ans		=	"will have ".$ans;
		elseif($t == 8)
		$ans		=	"had ".$ans;
		elseif($t == 10 )
		$ans		=	"have been ".$ans;
		elseif($t == 11)
		$ans		=	"had been ".$ans;
		else
		$ans		=	"will have been ".$ans;	
		return $ans;					   
	}
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
	{
	$f_v		  =	$tf_en;
	$q_w	  	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$f_v'")or die(mysql_error());
	if(!mysql_num_rows($q_w))
	{
	$f_v		=	substr($tf_en,0,-1).'u';
	}
	}
	else
	$f_v			 =	str_replace("_TTu","Tu",$tf_en);
	//echo R2T($f_v);
	//exit;
}						 
}

if(!isset($f_v))
{
	if($v_p == "t_pit_s")
	{
		$vrb_t	   =	str_replace('atu','',$v_en);
		$fn_v	  	=	str_replace('_tt','',$vrb_t);
		if($fn_v == $vrb_t)
		{	
		$fn_v	  	=	str_replace('_nt','',$vrb_t);
		}
		if($fn_v == $vrb_t)
		{
		$fn_v	  	=	str_replace('_TT','',$vrb_t);
		$fn_v	  	 =	substr($vrb_t,0,-3)."Tu";
		//echo $fn_v;
		}
		if($fn_v == $vrb_t)
		{
		$fn_v	  	 =	substr($vrb_t,0,-2)."u";
		//echo $fn_v;
		//exit;
		}		
	}
	elseif($v_p == "t_pit_p")
	{
		$vrb_t		=	str_replace('aVa','',$v_en);
		$fn_v	     =	str_replace('_tt','',$vrb_t);
		if($fn_v == $vrb_t)
		{		
		$fn_v	  	 =	str_replace('_nt','',$vrb_t);
		}
		if($fn_v == $vrb_t)
		{
		$fn_v	  	=	str_replace('_TT','',$vrb_t);
		$fn_v	  	 =	substr($vrb_t,0,-3)."Tu";
		//echo $fn_v;
		}
		if($fn_v == $vrb_t)
		{
		$vrb_t		=	str_replace('Va','',$v_en);
		$fn_v	  	 =	substr($vrb_t,0,-1)."u";
		}
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
				$f_v	=	substr($t_fv,0,-2);
				else
				$f_v	=	$t_fv;
			}
			//echo R2T($f_v);
		}
	
	}
}
if(!isset($f_v))
{
	
	$vrb				  =	str_replace("A_rka_L","",$v_en);
	if($vrb == $v_en)
	{
	$f_v0				 = 	substr($v_en,0,-4);
	$f_v1				 = 	substr($v_en,0,-3);
	$f_v2				 =	substr($f_v1,-1);
	$char				 =	substr($f_v0,-2);
	if($f_v2 == "V")
	{
		$f_v				  = 	substr($v_en,0,-4);
		if(substr($f_v,-1) == 'i' )
		{
			$t_no				 =	2;
			$f_v				  = 	substr($f_v,0,-1)."u";
			//echo R2T($f_v);
		}
	}
	if(!isset($f_v))
	{
		if($char == "_n" || $char == "_t")
		{
			$t_no					=	2;
			$f_v				=	substr($f_v0,0,-2);
			//echo R2T($f_v);
		}
		elseif(substr($f_v0,-2) == "_T")
		{
			$t_no					=	2;
			$f_v				=	str_replace("_T","Tu",$f_v0);
			//echo R2T($f_v);
		}
		else
		{
		if(substr($f_v0,-2) == "_p")
		{
			$t_no   =	3;
			$f_v	=	substr($f_v0,0,-2);
		}
		else
		{
		
		$t_no	  =	3;	
		$f_v	=	$f_v0;
		}
		//echo R2T($f_v);
		}
	}
	}
	else
	{
		$char	=	substr($vrb,-1);	
		if($char == "V")
		{
			$f_v				  = 	substr($vrb,0,-1);
			if(substr($f_v,-1) == 'i' )
			{
				$t_no					=	2;
				$f_v				  = 	substr($f_v,0,-1)."u";
				//echo R2T($f_v);
			}
		}
		
		if(!isset($f_v))
			{
				$char	=	substr($vrb,-1);
				if($char == "t")
				{
					
					$t_no					=	2;
					$f_v					 =	str_replace("_nt","",$vrb);
					if($f_v == $vrb)
					{
					$f_v					 =	str_replace("_tt","",$vrb);
					}
					if($f_v == $vrb)
					{
					$f_v					 =	str_replace("t","",$vrb);
					}
					//echo R2T($f_v);
					//exit;
				}
				elseif($char == "T")
				{
					$t_no					=	2;
					$f_v					 =	str_replace("_TT","Tu",$vrb);
					//echo R2T($f_v);
					//exit;
				}
				else
				{
				if($char == "p")
				{
					$t_no					=	3;
					$f_v	=	substr($vrb,0,-3);
				}
				else
				{
				$t_no	  =	3;	
				$f_v	=	substr($vrb,0,-1);
				}
				//echo R2T($f_v);
			}
			}
		//echo $vrb;	
	}
}

$f_v		  =	R2T(ltrim(rtrim($f_v)));
if($t_no	==	1 || $t_no	==	3)
{
	$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$f_v' AND `tense` = 0 AND `wordid` <> '' ") or die(mysql_error());	
	if(mysql_num_rows($qen_wrd) != 0 )
	{	
		$k =0;	
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
				$f_ev[$k]		 =	$fet_enwd['eword'];
				if($v_p == "t_pm_s" || $v_p == "t_pf_s" || $v_p == "t_pit_s")
					{
						if(substr($f_ev[$k],-1) == "e")
						$f_ev[$k]			=	$f_ev[$k]."s";
						else
						$f_ev[$k]			=	$f_ev[$k]."es";		
					}
		if($t_no	==	3)
		$f_ev[$k]		 =	"will ".$fet_enwd['eword'];
		$k++;
		}
	}
	else
	{
		$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND `tense` = 0  ") or die(mysql_error());
		$fet_enwd	 =	mysql_fetch_array($qen_wrd);
		$k =0;	
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
				$f_ev[$k]		 =	$fet_enwd['eword'];
				if($v_p == "t_pm_s" || $v_p == "t_pf_s" || $v_p == "t_pit_s")
					{
						if(substr($f_ev[$k],-1) == "e")
						$f_ev[$k]			=	$f_ev[$k]."s";
						else
						$f_ev[$k]			=	$f_ev[$k]."es";		
					}
		if($t_no	==	3)
		$f_ev[$k]		 =	"will ".$fet_enwd['eword'];
		$k++;
		}
	}
}
elseif($t_no	==	2)
{
	$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$f_v' AND `tense` = 1  AND `wordid` <> ''") or die(mysql_error());
	if(mysql_num_rows($qen_wrd) < 1)
	{	
	$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND `tense` = 1 ") or die(mysql_error());
	while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
	{
	$f_ev[]		 =	$fet_enwd['eword'];
	}
	}
	else
	{
	while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
	{
	$f_ev[]		 =	$fet_enwd['eword'];
	}
	}
}
elseif($t_no	==	4 || $t_no	==	5 || $t_no == 6 || $t_no == 10 || $t_no == 11 || $t_no == 12)
{
$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$f_v' AND `tense` = 3 AND `wordid` <> '' ") or die(mysql_error());
if(mysql_num_rows($qen_wrd) < 1)
	{
	$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND `tense` = 3 ") or die(mysql_error());
	while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
	{
	$f_ev[]		 =	$fet_enwd['eword'];
	}
	}
else
	{
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
		$f_ev[]		 =	$fet_enwd['eword'];
		}
	}	
}
elseif($t_no	==	7 || $t_no	==	8 || $t_no == 9 )
{
$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND `tense` = 2 AND `wordid` <>''") or die(mysql_error());
if(mysql_num_rows($qen_wrd) < 1)
{							   	
$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$f_v'  AND `tense` = 2 ") or die(mysql_error());
if(mysql_num_rows($qen_wrd) == 1)
	{							 
		$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND `tense` = 1 ") or die(mysql_error());
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
		$f_ev[]		 =	$fet_enwd['eword'];
		}
	}
else
	{
		
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
		$f_ev[]		 =	$fet_enwd['eword'];
		}
	}
}
else
{
$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` LIKE '%$f_v' AND  `tense` = 2 ") or die(mysql_error());
if(mysql_num_rows($qen_wrd) == 1)
	{							 
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{
		$f_ev[]		 =	$fet_enwd['eword'];
		}
	}
else
	{
		while($fet_enwd	 =	mysql_fetch_array($qen_wrd))
		{	
		$f_ev[]		 =	$fet_enwd['eword'];
		}
	}
}
	
}

if($v_p == "f_p_s")
{
	foreach($f_ev as $f_e)
	{ 
	if($t_no == 4)
	$f_ev1[]		=	"am ".$f_e;
	elseif($t_no == 5)
	$f_ev1[]		=	"was ".$f_e;
	elseif($t_no == 6 )
	$f_ev1[]		=	"will be ".$f_e;
	elseif($t_no == 3||$t_no == 1 || $t_no == 2)
	$f_ev1[]		=	" ".$f_e;
	else
	{
	$f_ev1[]	=	perfect($t,$f_e);
	}
	}
}
elseif($v_p == "f_p_p" || $v_p == "s_p_s" || $v_p == "s_p_p_2" || $v_p == "t_p_p_2")
{
	foreach($f_ev as $f_e)
	{
	if($t_no == 4)
	$f_ev1[]		=	"are ".$f_e;
	elseif($t_no == 5)
	$f_ev1[]		=	"were ".$f_e;
	elseif($t_no == 6 )
	$f_ev1[]		=	"will be ".$f_e;
	elseif($t_no == 3||$t_no == 1 || $t_no == 2)
	$f_ev1[]		=	" ".$f_e;
	else
	$f_ev1[]	=	perfect($t,$f_e);
	}
}
elseif($v_p == "t_pm_s" || $v_p == "t_pf_s")
{
	foreach($f_ev as $f_e)
	{
	if($t_no == 4)
	$f_ev1[]		=	"is ".$f_e;
	elseif($t_no == 5)
	$f_ev1[]		=	"was ".$f_e;
	elseif($t_no == 6 )
	$f_ev1[]		=	"shall be ".$f_e;
	elseif($t_no == 3||$t_no == 1 || $t_no == 2)
	$f_ev1[]		=	" ".$f_e;
	else
	$f_ev1[]	=	perfect($t,$f_e);
	}
}
if($v_p == "f_p_s")
$p_id		 =	1;
elseif($v_p == "f_p_p")
$p_id		 =	2;
elseif($v_p == "s_p_s")
$p_id		 =	3;
elseif($v_p == "t_pm_s")
$p_id		 =	5;
elseif($v_p == "t_pf_s")
$p_id		 =	6;
elseif($v_p == "t_pit_s")
$p_id		 =	8;
else
$p_id		 =	7;
if(!isset($plu))
{		
$qen_wrd	  =	mysql_query("SELECT `eword` FROM `word` where `tword` = '$s' AND `nid` = '$p_id' AND `wordid` = ''") or die(mysql_error());
$fet_enwd	 =	mysql_fetch_array($qen_wrd);
foreach($f_ev1 as $f_e)
{
echo $fet_enwd['eword']." ".$f_e;
echo "</br>";
}
}
else
{
$qen_wrd	  =	mysql_query("SELECT `altword` FROM `word` where `tword` = '$s' AND `nid` = '$p_id AND `wordid` = ''") or die(mysql_error());
$fet_enwd	 =	mysql_fetch_array($qen_wrd);
foreach($f_ev1 as $f_e)
{
echo $fet_enwd['altword']." ".$f_e;
echo "</br>";
}
}


?>
