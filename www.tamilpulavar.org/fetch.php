<?php
session_start();
include("connection.php");
include "trans/changeit.php";
$val	=	$_POST["val"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fetch</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
var val	= "<?php echo $val; ?>";
$(function()
	{
		$("#cls").click(function()
		{
			//alert(val);
			$.ajax(
			{
				url:"repositary.php",
				type:"POST",
				data:{"val":val},
			});
	   });	
	});
</script>
</head>
<body>
<?php
$roman		=	changeit($val,"unicode");
$colon		=	changeit($val,"cologne");
$telug		=	changeit($val,"telugu");
$malay		=	changeit($val,"malayalam");
$kanada	   =	changeit($val,"kannada");
$hindi		=	changeit($val,"devanagari");
echo "<br /><div class='container-fluid'>";
echo "<div class='row'><div class='col-md-4 col-md-offset-4 col-xs-12'><h4 class='text-center text-success' style='font-size: 150%; font-weight: bold;'><span title='Tamil' style='color:red;'>$val</span> - <span title='Diacritic'>$roman</span> - <span title='Malayalam'>$malay</span> - <span title='Telungu'>$telug</span> - <span title='Kannada'>$kanada</span> - <span title='Devanagari'>$hindi</span> - <span title='Roman'>$colon</span></h4></div><br /></div>
";
$cnt_tab[0]	=	"சதுரகராதி";
$sathu_nam_sql	   =	mysql_query("SELECT DISTINCT `table_name` FROM `sathu_peyar`");
$tab1 = 0;
while($sathu_nam_ar	=	mysql_fetch_array($sathu_nam_sql))
{	
	$fet_sa_tabna		  =	$sathu_nam_ar['table_name'];
	$sa_tana			   =	"<b class='text-info'>".$fet_sa_tabna."</b><br />";
	$sathu_sql	   		 =	mysql_query("SELECT * FROM `sathu_peyar` WHERE `tword`='$val' AND `table_name` = '$fet_sa_tabna'");
	while($sathu_sql_ar	=	mysql_fetch_array($sathu_sql))
	{
		$sathu_mea		.=	$sathu_sql_ar['meaning'].",";
	}
	if(!empty($sathu_mea))
	{
		$cont1[0][$tab1]	   =	$sa_tana.$sathu_mea;
	}
	else
	{
		$cont1[0][$tab1]		=	$sa_tana."<p class='text-primary'>தேடும் சொல் இல்லை</p>";
	}
	$sathu_mea = "";
	$tab1++;
}
$qry_lst	=	mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='tam' ORDER BY `order` ASC");
$table_len  =    mysql_num_rows($qry_lst);
$i = 0;
$unused_tab = array('antonyms','sathu_peyar');
$cont	   = array();
$tab	=	1;	
while($fet_val = mysql_fetch_assoc($qry_lst))
{
	$table = $fet_val['table_name'];
	if(!in_array($table,$unused_tab))
	{
		$qry	    =	mysql_query("SELECT DISTINCT `meaning` FROM `$table` WHERE `tword` = '$val'")or die(mysql_error());
		$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table' ")or die(mysql_error());
		$fet_tabl   =	mysql_fetch_array($qry1);
		$table_name =	$fet_tabl['full_name'];
		$link1[] 	= 	$fet_tabl['link'];
		$link_in1	= 	$fet_tabl['link'];
		if(mysql_num_rows($qry))
		{
			$cnt_tab[$tab]	  =	$table_name; 
			$tab1 = 0;
			while($fet	=	mysql_fetch_array($qry))
			{
				$val_m  =    $fet['meaning'];
				$strFindMe	=	"See";
				$strFindMe1	=	"காண்க";
				$exists = strpos($val_m, $strFindMe);
				$exists1 = strpos($val_m, $strFindMe1);
  				if($exists !== false || $exists1 !== false ) 
				{
			    	$result	=	preg_split('/See/',$val_m);	
					$result_kanka	=	preg_split('/காண்க/',$val_m);					
					if(count($result)>1)
					{
						$result_split =	explode(' ',$result[1]);
						//echo $result_split[1]."<--<br />";
						$anc_words	=	strip_tags($result_split[1]);
						$anc_word1	 =	preg_replace('/[0-9]+/', '', $anc_words);
						$anc_word11	 =	preg_replace('/\)/', '', $anc_word1);
						$anc_wordt		=	preg_replace('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/','',$anc_word11);
						$anc_word		=	trim($anc_wordt);
						//$anc_word	 =	trim(str_replace(".","",$anc_word11));
						$replaced_anc	=	'<a href="run.php?val='.$anc_word.'" style="color:#4b89f2;font-weight:700;">'.$anc_word.'</a>'; 
						$val_m	   =	str_replace($result_split[1],$replaced_anc,$val_m);
					}
					elseif(count($result_kanka)>1)
					{
						$result_split =	explode(':',$result_kanka[1]);
						$anc_words	=	strip_tags($result_split[1]);
						$anc_word1	 =	preg_replace('/[0-9]+/', '', $anc_words);
						$anc_word11	 =	preg_replace('/\)/', '', $anc_word1);
						$anc_word		=	preg_replace('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/','',$anc_word11);
						$anc_word		=	trim($anc_wordt);
						//$anc_word	 	=	trim(str_replace(".","",$anc_word11));
						$replaced_anc	=	'<a href="run.php?val='.$anc_word.'" style="color:#4b89f2;font-weight:700;">'.$anc_word.'</a>'; 
						$val_m	   =	str_replace($result_split[1],$replaced_anc,$val_m);	
					}
				}
				/*if(trim($table_name) == "சதுரகராதி")
				{
					//echo $val_m;
					$quer_sathu	=	mysql_query("SELECT `table_name` FROM `sathu_peyar` WHERE `meaning` = '$val_m'");
					while($row_sath	  =	mysql_fetch_array($quer_sathu))
					{
						$table_sathu	    =	"<b class='text-info'>".$row_sath['table_name']."</b><br />";
					}
						echo $cont1[$tab][$tab1] = $val_m;
				}
				else
				{*/
					$cont1[$tab][$tab1] = 	$val_m;
				/*}*/
			$tab1++;
			}
		}
		else
		{
			//echo $table_name;
			$w_cont[] = "<tr><td><a href='$link_in1' target='_blank'>$table_name</a></td></tr>";
		}
	}
	$tab++;	
}
$qry_lsteng = mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='eng'");
$tab2	=	0;
while($fet_valeng = mysql_fetch_assoc($qry_lsteng))
{
		$table 	  = 	$fet_valeng['table_name'];
		if($val != "")
		{
		$qry	    =	mysql_query("SELECT  `meaning`,`eword` FROM `$table` WHERE `meaning` LIKE '%$val%' AND `meaning` NOT LIKE '%_$val_%'")or die(mysql_error());
		}
		$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table'")or die(mysql_error());
		$fet_tabl   =	mysql_fetch_array($qry1);
		$table_name12 =	$fet_tabl['full_name'];
		$link[] 	   = 	$fet_tabl['link'];
		$link_in 	   = 	$fet_tabl['link'];
		if(mysql_num_rows($qry))
		{
			$cnt_tab1[$tab2]	  =	$table_name12; 
			$tab11 = 0;
			while($fet	   =	mysql_fetch_array($qry))
			{
				$val_m  	 =    $fet['eword'];
				$val_mean  =    $fet['meaning']; 
				$cont[$tab2][$tab11]    = $val_m." ".$val_mean;
				$tab11++;
			}
		}
		else
		{
			$w_cont1[] = "<tr><td><a href='$link_in' target='_blank'>$table_name12</a></td></tr>";
		}
		$tab2++;
}
$cont1	  =	array_filter(array_values($cont1));
$cont	   =	array_filter(array_values($cont));
$cnt_tab	=	 array_filter(array_values($cnt_tab));
$cnt_tab1   =	 array_filter(array_values($cnt_tab1));
echo "<div class='row'>";
for($h=0;$h<$tab;$h++)
{
	if($h%2 == 0)
	{
		echo "</div><div class='row'>";
	}
	if($cnt_tab[$h] != "")
	{
	echo "<div class='col-md-6  col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><a href='$link1[$h]' target='_blank'><h4 style='color:#f45016;'>".$cnt_tab[$h]."</h4></a></td></tr>";
	for($k=0;$k<count($cont1[$h]);$k++)
			{
				echo "<tr><td>".$cont1[$h][$k]."</td></tr>";
			}
	echo "</table></div>";
	}
	/*if($h%2 == 0)
	{
		echo "</table></div>";
	}	*/
}
for($h=0;$h<$tab2;$h++)
{
	if($h%2 == 0)
	{
		echo "</div><div class='row'>";
	}
	if($cnt_tab1[$h] != "")
	{
	echo "<div class='col-md-6  col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><a href='$link[$h]' target='_blank'><h4 style='color:#f45016;'>".$cnt_tab1[$h]."</h4></a></td></tr>";
	for($k=0;$k<count($cont[$h]);$k++)
			{
				echo "<tr><td>".$cont[$h][$k]."</td></tr>";
			}
	echo "</table></div>";
	}
}
if($w_cont != "")
{
	echo "<div class='row'><div class='col-md-6  col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><h5 style='color:#f45016;'>Not present in the dictionary  -  தேடும் சொல் இந்த அகராதியில் இல்லை</h5></td></tr>";
	$non_val	=	0;
	foreach($w_cont as $w_cont_value)
	{
		echo $w_cont_value;
		$non_val++;
	}
	foreach($w_cont1 as $w_cont_value1)
	{
		echo $w_cont_value1;
		$non_val++;
	}
	echo "</table></div>";
}
echo "<div class='row'><div class='col-md-10 col-md-offset-1'><table class='table table-responsive table-striped table-bordered '><tr><td><a href='about_dict.php?dict=corpus' target='_blank'><h4 style='color:#f45016;'>தமிழ்ப்புலவர் சொல்வங்கி</h4></a></td></tr><tr><td>";
$sql	   		 =	mysql_query("SELECT `sentence` FROM `sentence` WHERE `sentence` LIKE '%$val%' LIMIT 4");
while($sql_ar	=	mysql_fetch_array($sql))
{
	echo "-> ".$sql_ar['sentence'].".</br>";
}
echo "</td></tr></table></div></div>";
echo "<div class='row'><div class='col-md-10 col-md-offset-1'><table class='table table-responsive table-striped table-bordered '><tr><td><a href='http://www.tamilkalanjiyam.in' target='_blank'><h4 style='color:#f45016;'>தமிழ் களஞ்சியம்</h4></a></td></tr><tr><td>";
$sql	   		 =	mysql_query("SELECT `detail` FROM `t_collection` WHERE `detail` LIKE '%$val%' LIMIT 1");
while($sql_ar	=	mysql_fetch_array($sql))
{
	echo "-> ".$sql_ar['detail'].".</br>";
}
echo "</td></tr></table></div></div>";
//$cont	=	array_filter($cont);
//$w_cont  =	array_filter($w_cont);

if($non_val	==	16)
{
	$_SESSION['tmpwrd']	=	$val;
	?>
	<script>
	$(function(){
	$("#bt1").click();
	});
	</script>
	<?php
 }
 echo "</div>"
?>


<button data-toggle='modal' data-target='#pop' class='btn bt_hide'  id='bt1' style="display:none">Signup</button>
<div class="modal fade" id="pop" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
  	<div class="modal-dialog" >
	<div class="modal-content" >
		<div class="modal-header" style="background-color:#ffd8ff;">
			<button type="button" id="cls" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign up</h3>
		</div>
		<div class="modal-body" style="background-color:#e0ffff;">
		<table  class='table table-responsive table-striped table-bordered '>
        <tr><td><h5 style='color:#f45016;'>Not present in the dictionary  -  தேடும் சொல் இந்த அகராதியில் இல்லை</h5></td></tr>
        <tr><td><h5 style='color:#f45016;'><?php echo $val; ?>&nbsp;இச்சொல்லிற்க்கு விளக்கம் தர விரும்பினால் உறுப்பினர் ஆன பின்பு விளக்கம் தருமாறு அன்புடன் கேட்டுக்கொள்கிறோம்</h5></td></tr>
		<tr><td> <button data-toggle='modal' data-target='#squarespaceModal_signup' class='btn bt_hide'  id='bt'>Signup</button>
		or <button data-toggle='modal' data-target='#squarespaceModal_login'  class='btn bt_hide'  id='bt'>Login</button></td></tr></table>
    </div>			
		</div>
		
	</div>
</div>
</div>

<div class="modal fade" id="squarespaceModal_signup" tabindex="10" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
	<div class="modal-content" >
		<div class="modal-header" style="background-color:#ffd8ff;">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign up</h3>
		</div>
		<div class="modal-body" style="background-color:#e0ffff;">

			<form  action="form/mailer.php" method="post" name="form1" id="form1" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter the Name" required>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="cnfpwd" name="cnfpwd" placeholder="Confirm Password" required>
              </div>
                <div class="form-group">
                <label for="Captcha">Captcha</label>
                <br />		
<img src="form/verificationimage.php" alt="verification image, type it in the box"  class="img-responsive" width="150"
height="150"/>The sign-up is required for voluntary contributors only. General Users can use the site without sign-up. Thanks..<br /><input name="verif_box" type="text"  class="form-control" id="verif_box" />
              </div>
               <button type="submit" class="btn btn-danger">Submit</button>
            </form>

		</div>
		
	</div>
</div>
</div>
</body>
</html>
<?php
/*}*/
?>