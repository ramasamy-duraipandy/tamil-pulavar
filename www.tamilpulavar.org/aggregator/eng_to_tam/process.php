<?php
include("fns.php");
include("connection.php");
$sent			    =	$_POST['cntnt'];	
$arr_sent		    =	explode(" ",$sent);
$verb			    =	end($arr_sent);
$sub			     = 	$arr_sent[0];
$sub			     =	mysql_real_escape_string($sub);

$sub_en		      =	mysql_query("SELECT * FROM `word` WHERE `tword` = '$sub' ")or die(mysql_error());
$s_e		         =	mysql_fetch_array($sub_en);
$verb_wrd			=	T2R($verb);
$special_word		=	array(
								"see"  	 =>	"காண்",
								"tell" 	=>	"சொல்",
								"tell" 	=>	"சொல்லு",
								"eat"  	 =>	"தின்",
								"eat"  	 =>	"தின்னு",
								"listen"  =>	"கேள்",
								"listen"  =>	"கேளு",
								"boil"    =>	"வேகு",
								"learn"   =>	"கல்",
								"sell"	=>	"வில்",
								"stand"   =>	"நில்",
								"go"	  =>	"போ",
								"come"	=>	"வா",
								"give"	=>	"தா",
								"die"	 =>	"சா",
								"protect" =>	"கா",
								"write"   =>	"எழுது"
								);
					
$vikuthi		   =		array(
								"f_p_s"    => "ஏன்",/*--------1st person Singular--------*/
								"f_p_p"    => "ஓம்",/*--------1st person Plural----------*/
								"s_p_s"    => "ஆய்",/*--------2nd person singular--------*/
								"s_p_p_1"  => "ஈர்கள்",
								"s_p_p_2"  => "ஆர்கள்",/*-------2nd person plural--------*/
								"t_pm_s"   => "ஆன்",/*-------3rd person male Singular--------*/
								"t_pf_s"   => "ஆள்",/*-------3rd person Female Singular--------*/
								"t_p_p_1"  => "ஆர்",/*-------3rd person plural --------*/
								"t_p_p_2"  => "ஆர்கள்",/*-------3rd person plural--------*/
								"t_pit_s"  => "அது",/*-------3rd person singular it--------*/
								"t_pit_p"  => "அன",/*-------3rd person plural it--------*/
								"inf_1"    => "அ",
								"inf_2"    => "அதற்காக",/*-------infinity--------*/
								"neg_inf"  => "அவில்லை"//negative infinity	
								);
$tense_key		  =		array("10"=>"ko_NTiru_ntiru_kk","11"=>"ko_NTiru_ntiru_n","12"=>"ko_NTiru_ntiru_pp","4"=>"ko_NTiru_kki","5"=>"ko_NTiru_nt","6"=>				   									"ko_NTiru_p","7"=>"_iru_kki","8"=>"_iru_nt","9"=>"_iru_pp","1"=>"kiR");
$person_key	     =		array("f_p_s" => "E_V","f_p_p"=>"O_m","s_p_s"=>"A_y","s_p_p_2"=>"a_rka_L","t_pm_s"=>"A_V","t_pf_s"=>"A_L","t_p_p_2"=>"a_rka_L",
								   "t_pit_s"=>"atu","t_pit_p"=>"aVa");	
$past_key		   = 		 array("saw" =>"ka_NT","told"=>"co_VV","ate"=>"ti_VV","listened" =>"kE_TT","boiled"=>"ve_nt",
								   "sold" =>"vi_RR","won"=>"ve_VR","stood"=>"ni_VR","learned"=>"ka_RR",
								   "went" =>"pOVE","came"=>"va_nt","gave" =>"ta_nt","died"=>"ce_tt","protected"=>"kA_tt","wrote"=>"_eZutiV");
$f_k			    = 		 array("will see" =>"kA_Np","will tell" =>"co_lv","will eat" =>"ti_Vp","will listen" =>"kE_Tp","will boil"=>"vekuv",
									"will sell"=>"vi_Rp","will win"=>"ve_lv","will stand"=>"ni_Rp","willl learn"=>"ka_Rp","will go"=>"pOv",
									"will come"=>"varuv","will give"=>"taruv","will protect" =>"kA_pp","will die"=>"cAv","will write"=>"_eZutuv");
$p_k			    =		 array("see"=>"kA_Nk","tell" =>"co_lk","eat"=>"ti_Vk","listen" =>"kE_Tk","boil"=>"vEkiR",
									"sell" =>"vi_Rk","win" =>"ve_lk","stand" =>"ni_Rk","learn" =>"ka_Rk","go"=>"pOkiR",
									"come" =>"varuk","give"=>"taruk","die"=>"cAkiR","protect"=>"kA_kk","write"=>"_eZut");
$perf_key		   = 		array("see" =>"ka_NTu","tell"=>"co_lli","eat"=>"ti_VVu","listen" =>"kE_TTu","boil"=>"ve_ntu","sell"=>"vi_RRu",
								   "win"=>"ve_VRu","stand"=>"ni_VRu","learn"=> "ka_RRu","go"=>"pO_y","come"=>"va_ntu","give"=>"ta_ntu","die" =>"ce_ttu",
								   "write"=>"_eZuti");
$per_ten			=		array("seen" => "see","told"=>"tell","eaten"=>"eat","listened"=>"listen","boiled"=>"boil","sold"=>"sell","won"=>"win",
								   "stood"=>"stand","learned"=>"learn","gone"=>"go","came"=>"come","given"=>"give","died"=>"die","written"=>"write");								
$l3				 =		substr($verb_wrd,-3);
$p	 			  =		array_search($l3,$person_key);

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
foreach($past_key as $pa_k)
		{
			$pos	=	strpos($verb_wrd,$pa_k);
			if($pos === false)
			{
			}
			else
			{
				$t			=	2;
				$ans	=	array_search($pa_k,$past_key); 
				break;
			}
		}
		
foreach($f_k as $f_kw)
		{
			$pos	=	strpos($verb_wrd,$f_kw);
			if($pos === false)
			{
			}
			else
			{
				$t			=	3;
				$ans	=	array_search($f_kw,$f_k);
				break;
			}
		}
foreach($tense_key as $t_w)
{
	$pos	=	strpos($verb_wrd,$t_w);
	if($pos === false)
	{
	}
	else
	{
		
		$t	 =	array_search($t_w,$tense_key); 
		if($t == "1")
		{
			$p_w	=	substr($verb_wrd,0,5);
			$ans    =	array_search($p_w,$p_k);
			if($p == "t_pm_s" || $p == "t_pf_s" || $p == "t_pit_s")
			{
				if(substr($ans,-1) == "e")
				$ans			=	$ans."s";
				else
				$ans			=	$ans."es";		
			}
			$t = 1;
			break;
		}
		elseif(($t >= "4" && $t <="6" ) || ($t >="10" && $t <="12"))
		{
			foreach($perf_key as $p_kw)
			{
				$pos	=	strpos($verb_wrd,$p_kw);
				if($pos === false)
				{
				}
				else
				{
					
					$ans	=	array_search($p_kw,$perf_key);
					if($ans == "write")
					$ans	=   "writting";
					elseif($ans == "come")
					$ans	=   "comming";
					elseif($ans == "give")
					$ans	=   "giving";
					elseif($ans == "die")
					$ans	=   "dying";
					else
					$ans	=	 $ans."ing";
					break;
				}
			}
		}
		elseif($t >= "7" || $t <="9")
		{
			foreach($perf_key as $p_kw)
			{
				$pos	=	strpos($verb_wrd,$p_kw);
				if($pos === false)
				{
				}
				else
				{
					$per_ver	=	array_search($p_kw,$perf_key);
					$ans	    =	array_search($per_ver,$per_ten);
					break;
				}
			}
		}
		//echo $p;
		break;
		
	}
	
}
if($p == "f_p_s")
{
	if($t == 4)
	$ans		=	"am ".$ans;
	elseif($t == 5)
	$ans		=	"was ".$ans;
	elseif($t == 6 )
	$ans		=	"will be ".$ans;
	elseif($t == 3||$t == 1 || $t == 2)
	$ans		=	" ".$ans;
	else
	{
	$ans	=	perfect($t,$ans);
	}
}
elseif($p == "f_p_p" || $p == "s_p_s" || $p == "s_p_p_2" || $p == "t_p_p_2")
{
	if($t == 4)
	$ans		=	"are ".$ans;
	elseif($t == 2 || $t == 5)
	$ans		=	"were ".$ans;
	elseif($t == 6 )
	$ans		=	"will be ".$ans;
	elseif($t == 3||$t == 1 || $t == 2)
	$ans		=	" ".$ans;
	else
	$ans	=	perfect($t,$ans);
}
elseif($p == "t_pm_s" || $p == "t_pf_s")
{
	if($t == 4)
	$ans		=	"is ".$ans;
	elseif($t == 2 || $t == 5)
	$ans		=	"was ".$ans;
	elseif($t == 6 )
	$ans		=	"shall be ".$ans;
	elseif($t == 3||$t == 1 || $t == 2)
	$ans		=	" ".$ans;
	else
	$ans	=	perfect($t,$ans);
}
//echo $ans;
echo $s_e['eword']." ".$ans;
/*$verbs			  =		array("see"	=> "காண்கிறு","saw"     => "கண்ட்","willsee"    => "காண்ப்");										   						
$col				=		array("tell"   => "சொல்கிற்","told"    => "சொன்ன்","willtell" => "சொல்வ்");	
$thin		 	   =		array("eat"    => "தின்கிறு", "ate"     => "தின்ன்","willeat"   => "தின்ப்");
$kel				=		array("listen" => "கேட்கிறு","listened" => "கேட்ட்","willlisten" => "கேட்ப்");
$veku		 	   =		array("boil"   => "வேகுகிறு","boiled"  => "வெந்த்","willboil"   => "வேகுவ்");
$vil				=		array("sell"   => "விற்கிறு","sold" 	 => "விற்ற்","willsell"     => "விற்ப்");
$vel				=		array("win"    => "வெல்கிறு","won"     => "வென்ற்","willwin"    => "வெல்வ்");
$nil				=		array("stand"  => "நிற்கிறு","stood"     => "நின்ற்","willstand"    => "நிற்ப்");	
$kal				=		array("learn"  => "கற்கிறு","learned"   => "கற்ற்","willlearn"     => "கற்ப்");	
$po				 =		array("go"     => "போகிறு","went"     => "போன்","willgo"       => "போவ்");
$va				 =		array("come"   => "வருகிறு","came"     => "வந்த்","willcome"      => "வருவ்");	
$tha				=		array("give"   => "தருகிறு","gave" 	 => "தந்த்","willgive"       => "தருவ்");
$sa				 =		array("die"    => "சாகிறு","dead" 	  => "செத்த்","willdie"       => "சாவ்");
$ka				 =		array("protect"=> "காக்கிறு","protected" => "காத்த்","willprotect"  => "காப்ப்");*/	


?>
