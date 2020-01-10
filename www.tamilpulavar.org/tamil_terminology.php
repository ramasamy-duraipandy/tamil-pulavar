<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tamil Terminology</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function call_term(nam,val)
{
					$( "li" ).removeClass( "active" );
					$("#"+nam).addClass('active');
					$("#r3").html("<center><img src='img/loading_spinner.gif'/></center>'");
					$.ajax
					({
						url:"tamil_terminology_fetch.php",
						data:{val:val,nam:nam},
						type:"POST",
						success: function(result)
						{
							$("#r3").html(result);
						},	
					});
}
</script>
<body>
<?php
include("connection.php");
$value = $_POST['wrd'];
$result_c_name = mysql_query("SELECT DISTINCT `name` FROM `common_words` ");
while($row = mysql_fetch_array($result_c_name))
{
	$ta_names[] = 	$row['name'];
	//$nam_ta	 =	$row['name'];
}
for($b=0;$b<count($ta_names);$b++)
{
	$nam_ta	 	= 	$ta_names[$b];
	$qry_cw        =	mysql_query("(SELECT `meaning` FROM `common_words` WHERE `eword` = '$value' AND `name` = '$nam_ta') UNION (SELECT `meaning` FROM `kalai` WHERE `eword` = '$value' AND `name` = '$nam_ta')");
	$count_wrds   = mysql_num_rows($qry_cw);
	$qry_cw1        =	mysql_query("(SELECT `meaning` FROM `kalai_wrds` WHERE `eword` = '$value' AND `name` = '$nam_ta')");
	$count_wrds1   = mysql_num_rows($qry_cw1);	
	while($fet_cw  =	mysql_fetch_assoc($qry_cw))
	{
		$word_mean[$b]  = $fet_cw['meaning'];
	}
	while($fet_cw1  =	mysql_fetch_assoc($qry_cw1))
	{
		$word_mean1[$b] = $fet_cw1['meaning'];
	}	
//echo $nam_ta;
//echo $word_mean1[$b];
//echo "<br /><br />";
}


?>



<div class="container">
<h4 class="text-center text-success" style="font-size: 150%; font-weight: bold;"><?php echo $value; ?></h4>
            <br />
    <div class="row">
		<div class="col-md-6">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <?php
     for($i=0;$i<16;$i++)
     {
     	$nam = $ta_names[$i] ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo "head_".$i; ?>">
      <h4 class="panel-title panel-danger">
        <a role="button"  data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>" 
        aria-expanded="<?php if($i == 0){echo "true";}else{echo "false";} ?>" 
        aria-controls="<?php echo $i; ?>" class="text-danger <?php if($i == 0){} else { echo "collapsed";} ?>">
         <?php echo $nam; ?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $i; ?>" class="panel-collapse <?php if($i==0){ echo "collapse in";}else{echo "collapse";}?>" role="tabpanel" aria-labelledby="<?php echo "head_".$i; ?>">
      <div class="panel-body" id="<?php echo "val_".$i; ?>">
       <?php 
	   		if($word_mean[$i] != "")
			{
				
	   			echo $word_mean[$i]."<br />";
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>Word Not found</h4>"; 
			}
			if($word_mean1[$i] != "")
			{
	   			echo $word_mean1[$i].'<a href="http://www.tamilvu.org/" target="_blank">(TVA)</a><br />';
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>Word Not found<a href='http://www.tamilvu.org/' target='_blank'>(TVA)</a></h4>"; 
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
     for($s=16;$s<31;$s++)
     {
     	$nam1 = $ta_names[$s] ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo "head1_".$s; ?>">
      <h4 class="panel-title panel-danger">
        <a role="button"  data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $s; ?>" 
          aria-expanded="<?php if($s == 16){echo "true";}else{echo "false";} ?>"  
        aria-controls="<?php echo $s; ?>" class="text-danger <?php if($s != 16){ echo "collapsed";} ?>">
         <?php echo $nam1; ?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $s; ?>" class="panel-collapse <?php if($s==16){ echo "collapse in";}else{echo "collapse";}?>" role="tabpanel" aria-labelledby="<?php echo "head1_".$s; ?>">
      <div class="panel-body" id="<?php echo "val_".$s; ?>">
       <?php 
	   		if($word_mean[$s] != "")
			{
				
	   			echo $word_mean[$s]."<br />";
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>Word not found.</h4>"; 
			}
			if($word_mean1[$s] != "")
			{
	   			echo $word_mean1[$s].'<a href="http://www.tamilvu.org/" target="_blank">(TVA)</a><br />';
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>Word Not found<a href='http://www.tamilvu.org/' target='_blank'>(TVA)</a></h4>"; 
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
</body>
</html>