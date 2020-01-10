<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
$val		=	$_GET['wrd'];
$dict	   =	$_GET['dict'];
$sq	   =	mysql_query("SELECT `api_hits` FROM `api_hits` WHERE `sno` = 1") or die(mysql_error());
$ft_sq	=	mysql_fetch_array($sq);
$prev	 = 	$ft_sq['api_hits'];
mysql_query("UPDATE `api_hits` SET `api_hits` = $prev+1 WHERE `sno` = 1") or die(mysql_error());
//$cate	   =	$_GET['cate'];
$site 	   =	 "<br /><br /><center><a name='tamilpulavar' href='http://www.tamilpulavar.org/' target = '_blank' style='alignment-adjust:right'><strong>Content - Provided By: tamilpulavar.org</strong></a></center>";
if($dict == "செம்மொழி")
{
	$value		  =	$val;
$result_c_name1 = mysql_query("SELECT  `topic` FROM `ilakiyam_search_oder` ORDER BY `order`");
while($row1 = mysql_fetch_array($result_c_name1))
     {
          $name_ter1[]  =	$row1['topic'];
		  
		  //echo "SELECT `meaning` FROM `ilakiyam` WHERE `hdwrd` = '%$value%' AND `topic` = '$ta_names'</br>";
		  //exit;
	 }
	 //print_r($name_ter1);
	 for($q=0;$q<count($name_ter1);$q++)
	 {
		 $ta_names	 =	mysql_real_escape_string($name_ter1[$q]);
	  	 $qry_cw       =	mysql_query("SELECT `meaning` FROM `ilakiyam` WHERE `hdwrd` = '$value' AND `topic` = '$ta_names'");
		$count_wrds   =	mysql_num_rows($qry_cw);
			if($count_wrds >= 1)
			{
				while($fet_cw  =	mysql_fetch_assoc($qry_cw))
				{
					$word_mean[$q][]  = $fet_cw['meaning'];
					//echo $fet_cw['meaning']."<br>";
				}
			}
			else
			{
		
			}
	 }
	// exit;
	//print_r($word_mean);
	//exit;
	?>

<div class="container">
<h4 class="text-center text-success" style="font-size: 150%; font-weight: bold;"><?php echo $value ?></h4>
            <br />
    <div class="row">
		<div class="col-md-6">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <?php
     for($i=0;$i<10;$i++)
     {
     	$nam = $name_ter1[$i] ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo "head_".$i; ?>">
      <h4 class="panel-title panel-danger">
        <a role="button"  data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>" 
        aria-expanded="<?php if($i == 0){echo "true";}else{echo "false";} ?>" 
        aria-controls="<?php echo $i; ?>" class="text-danger <?php if($i == 0){} else { echo "collapsed";} ?>">
         <?php echo $nam; ?></a>
         <?php
		 if($nam == "திருமுருகாற்றுப்படை & நெடுநல்வாடை") 
		 {
			 echo '<a href="ilakiyam_abbrevation.php?get=திருமுருகாற்றுப்படை மற்றும் நெடுநல்வாடை" target="_blank" data-toggle="tooltip" class="pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i></a>';
		 }
		 elseif($nam == "சிலப்பதிகாரம் & மணிமேகலை")
		 {
			 echo '<a href="ilakiyam_abbrevation.php?get=சிலப்பதிகாரம் மற்றும் மணிமேகலை" target="_blank" data-toggle="tooltip" class="pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i></a>';
		 }
		 else
		 { ?>
			 <a href="ilakiyam_abbrevation.php?get=<?php echo $nam; ?>" target="_blank" data-toggle="tooltip" class="pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
		<?php  }?>
         
         
       
      </h4>
    </div>
    <div id="<?php echo $i; ?>" class="panel-collapse <?php if($i==0){ echo "collapse in";}else{echo "collapse";}?>" role="tabpanel" aria-labelledby="<?php echo "head_".$i; ?>">
      <div class="panel-body" id="<?php echo "val_".$i; ?>">
       <?php 
	   for($b=0;$b<count($word_mean[$i]);$b++)
	   {
	   		if($word_mean[$i][$b] != "")
			{
				
	   			echo $word_mean[$i][$b]."<br />";
			}
			else
			{
			
			}
	   }
	   ?>      
       </div>
    </div>
  </div>
 <?php } ?> 
</div>
</div>
<div class="col-md-6">
<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
  <?php
     for($s=11;$s<20;$s++)
     {
     	$nam1 = $name_ter1[$s] ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo "head1_".$s; ?>">
      <h4 class="panel-title panel-danger">
        <a role="button"  data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $s; ?>" 
          aria-expanded="<?php if($s == 11){echo "true";}else{echo "false";} ?>"  
        aria-controls="<?php echo $s; ?>" class="text-danger <?php if($s != 11){ echo "collapsed";} ?>">
         <?php echo $nam1; ?>
        </a>
        <?php
		 if($nam1 == "சங்க இலக்கியம் & திருக்குறள்") 
		 {
			 echo '<a href="ilakiyam_abbrevation.php?get=சங்க இலக்கியம் மற்றும் திருக்குறள்" target="_blank" data-toggle="tooltip" class="pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i></a>';
		 }
		 else
		 { 
         ?>
         <a href="ilakiyam_abbrevation.php?get=<?php echo $nam1; ?>" target="_blank" data-toggle="tooltip" class="pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
         <?php
		 } ?>
      </h4>
    </div>
    
    <div id="<?php echo $s; ?>" class="panel-collapse <?php if($s==11){ echo "collapse in";}else{echo "collapse";}?>" role="tabpanel" aria-labelledby="<?php echo "head1_".$s; ?>">
      <div class="panel-body" id="<?php echo "val_".$s; ?>">
       <?php 
	      for($t=0;$t<count($word_mean[$s]);$t++)
	   		{
	   			if($word_mean[$s][$t] != "")
				{
					echo $word_mean[$s][$t]."<br />";
				}
				else
				{
					
				}
			}
	   ?>      
       </div>
    </div>
  </div>
 <?php } ?> 
 	</div>
  </div>
 </div>
</div>
<br/><br/><br/>
<br/>
<br/>
<?php
echo $site; 
}
if($dict	==	"tamil-tamil")
{
	echo "<br />";
	echo "<div class='row'><div class='col-md-4 col-md-offset-4 col-xs-12'><h4 class='text-center text-success' style='font-size: 150%; font-weight: bold;'>$val</h4></div><br /></div>
	<div class='row'><div class='col-md-10 col-md-offset-1'><table class='table table-responsive table-striped table-bordered '><tr><td>";
	/*$sql	   =	mysql_query("SELECT `sentence` FROM `sentence` WHERE `sentence` LIKE '%$val%' LIMIT 4");
	while($sql_ar	=	mysql_fetch_array($sql))
	{
		echo "-> ".$sql_ar['sentence'].".</br>";
	}
*/	echo "</td></tr></table></div></div>";
	$qry_lst = mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='tam' ORDER BY `order` ASC");
$table_len  =    mysql_num_rows($qry_lst);
$i=0;
$unused_tab = array('antonyms');
$cont	   = array();
$tab	=	0;	
while($fet_val = mysql_fetch_assoc($qry_lst))
{
	$table = $fet_val['table_name'];
	if(!in_array($table,$unused_tab))
	{
	$qry	    =	mysql_query("SELECT DISTINCT `meaning` FROM `$table` WHERE `tword` = '$val'")or die(mysql_error());
	$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table'")or die(mysql_error());
	$fet_tabl   =	mysql_fetch_array($qry1);
	$table_name =	$fet_tabl['full_name'];
	$link1[] 	   = 	$fet_tabl['link'];
	$link_in1	   = 	$fet_tabl['link'];
	if(mysql_num_rows($qry))
	{
		$cnt_tab[$tab]	  =	$table_name; 
		$tab1 = 0;
		while($fet	=	mysql_fetch_array($qry))
		{
		$val_m  =    $fet['meaning'];
		$cont1[$tab][$tab1] = 	$val_m;
		$tab1++;
		}
	}
	else
	{
		$w_cont[] = "<tr><td><a href='$link_in1' target='_blank'>$table_name</a></td></tr>";
	}
	}
	$tab++;	
}
$qry_lsteng = mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='eng'");
$tab2	=0;
while($fet_valeng = mysql_fetch_assoc($qry_lsteng))
{
		$table 	  = 	$fet_valeng['table_name'];
		if($val != "")
		{
		$qry	    =	mysql_query("SELECT  `meaning`,`eword` FROM `$table` WHERE `meaning` LIKE '%$val%' AND `meaning` NOT LIKE '%_$val_%'")or die(mysql_error());
		}
		$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table'")or die(mysql_error());
		$fet_tabl   =	mysql_fetch_array($qry1);
		$table_name =	$fet_tabl['full_name'];
		$link[] 	   = 	$fet_tabl['link'];
		$link_in 	   = 	$fet_tabl['link'];
		if(mysql_num_rows($qry))
		{
			$cnt_tab1[$tab2]	  =	$table_name; 
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
			$w_cont1[] = "<tr><td><a href='$link_in' target='_blank'>$table_name</a></td></tr>";
		}
		$tab2++;
	
}
/*print_r($cont);
exit;*/
//$cont		=	 array_filter($cont);


//$cont1	   =	 remove_empty($cont);
//$count	   =	 count($cont1);
//print_r($cont);
//exit;
$cont1	  =	array_filter(array_values($cont1));
$cont	  =	array_filter(array_values($cont));
//print_r($cont1);
//exit;
$cnt_tab	=	 array_filter(array_values($cnt_tab));
$cnt_tab1	=	 array_filter(array_values($cnt_tab1));
//print_r($cnt_tab);
//exit;
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
	echo "<div class='row'><div class='col-md-6  col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><h3 style='color:#f45016;'><br><br>Not present in the dictionary  -  தேடும் சொல் இந்த அகராதியில் இல்லை</h3></td></tr>";
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
	$cont	=	array_filter($cont);
	$w_cont  =	array_filter($w_cont);
	if(!empty($cont) && !empty($w_cont))
	{
	}
	else
	{
	 }
	 echo $site;	
}
elseif($dict == "english-tamil")
{
	echo "<br />";
	echo "<div class='row'><div class='col-md-4 col-md-offset-4  col-xs-12'><h4 class='text-center text-success' style='font-size: 150%; font-weight: bold;'>$val</h4></div><br />";
	$qry_lst = mysql_query("SELECT `table_name` FROM `table_name` WHERE `language`='eng'");
	$table_len  =    mysql_num_rows($qry_lst);
	$i=0;
	
	while($fet_val = mysql_fetch_assoc($qry_lst))
	{
		$table	  =	$fet_val['table_name'];
		$qry	    =	mysql_query("SELECT `meaning` FROM `$table` WHERE `eword` = '$val'")or die(mysql_error());
		$qry1	   =	mysql_query("SELECT `full_name`,`link` FROM `table_name` WHERE `table_name` = '$table'")or die(mysql_error());
		$fet_tabl   =	mysql_fetch_array($qry1);
		$table_name =	$fet_tabl['full_name'];
		$link 	   = 	$fet_tabl['link'];
		if(mysql_num_rows($qry))
		{
			$fet	=	mysql_fetch_array($qry);
			$val_m  =    $fet['meaning'];
			$cont[] = "<div class='col-md-6 col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><a href='$link' target='_blank'><h4 style='color:#f45016;'>$table_name</h4></a></td></tr><tr><td>".$val_m."</td></tr></table></div>";
		}
		else
		{
			$w_cont[] =  "<tr><td><a href='$link' target='_blank'>$table_name</a></td></tr>";
		}
	}
	foreach($cont as $cont_value)
	{
		echo $cont_value;
	}
	if($w_cont != "")
	{
		echo "<div class='col-md-6  col-xs-12'><table  class='table table-responsive table-striped table-bordered '><tr><td><h3 style='color:#f45016;'><br><br>Not present in the dictionary  -  தேடும் சொல் இந்த அகராதியில் இல்லை</h3></td></tr>";
		foreach($w_cont as $w_cont_value)
		{
			echo $w_cont_value;
		}
		echo "</table></div>";
	}
	echo $site;
}
?>
</body>
</html>