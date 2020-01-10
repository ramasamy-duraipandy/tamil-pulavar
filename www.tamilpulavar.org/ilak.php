<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ilak</title>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    
});
</script>

</head>
<body>
<?php
include("connection.php");
/*mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("word")or die(mysql_error());
mysql_query("SET NAMES 'utf8'");*/
//exit;
$value		  =	$_POST['ilak'];
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
<center style="color:red;">
<img src="ME2.jpg" alt='முனைவர்.ப.பாண்டியராஜா' style="float:left;" />
<a href="http://tamilconcordance.in/" target="_blank" style="cursor:pointer;text-decoration:none;"><strong>செம்மொழி இலக்கிய / இலக்கண தேடல்</strong>
     <h6>தொகுத்தளித்தவர்</h6>
     <h5 style="color: #300080;">முனைவர்.ப.பாண்டியராஜா</h5></a>
   <h6>(மேனாள்:துணைமுதல்வர், தலைவர்,கணிதத்துறை இயக்குநர், கணினித்துறைஅமெரிக்கன் கல்லூரி, மதுரை)</h6></center>
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
?>
</body>
</html>