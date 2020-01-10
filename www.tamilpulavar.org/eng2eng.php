<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>English to English</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function call_kalai(nam,val)
{
					$( "li" ).removeClass( "active" );
					$("#"+nam).addClass('active');
					$("#r3").html("<center><img src='img/loading_spinner.gif'/></center>'");
					$.ajax
					({
						url:"kalai_fetch.php",
						data:{val:val,nam:nam},
						type:"POST",
						success: function(result)
						{
							$("#val_"+nam).html(result);
						},	
					});
}
</script>
</head>

<body>
<?php
error_reporting(0);
include("connection.php");
function fetch_freedict($link,$value)
{
	$value = ltrim(rtrim($value));
	$lastSpace = strrpos($value," ");
	$string_a = strrpos($value,"a");
	include('simple_html_dom.php');
	$firstCharacter = strtolower(substr($value, 0, 2));
	if($firstCharacter == 'a ')
	{
		$value_changed =  preg_replace('/a /','A+',$value,1);
		$html = $link.$value_changed;
	}
	else
	{
		if($lastSpace != "")
		{
			$value_replaced = preg_replace('/\s+/', '-', $value);
			$html = $link.$value_replaced;
		}
		else
		{
			$html = $link.$value;
		}
	}
	$content = file_get_contents($html);
	$first_step = explode( '<div id="MainTxt">' ,$content );
	$second_step = explode('<aside style="margin-top:1rem">' , $first_step[1]);
	$dom = new DOMDocument;
	$dom->loadHTML($second_step[0]);
	foreach ($dom->getElementsByTagName('a') as $node) 
	{
		$original_url = $node->getAttribute('href');
		// Do something here
		$var = "run.php?val=";
		$node->setAttribute('href', $var.$original_url);
	}
	$html_val = $dom->saveHtml();
	if($html_val != "" && $second_step[0] != "")
	{
		echo "<br><br><div class='row'><div class='col-md-8 col-md-offset-2 col-xs-12'><table class='table table-responsive table-striped '><tr>
        <td><h4 style='color:#f45013;'>".$value."</h4></td></tr>";
		echo "<tr class='success'><td>".$html_val."</td></tr></table></div></div>";
	}
	else
	{
  		echo "<br><br><div class='row'><div class='col-md-8 col-md-offset-2 col-xs-12'><table class='table table-responsive table-striped '><tr>
		<td><h4 style='color:#f45013;'>".$value."</h4></td></tr>";
		echo "<tr class='success'><td>oops! Not Present in Dictionary</td></tr></table></div></div>";
	}
}



function call_comwrd($value)
{
	?>
	<?php /*?>$result_c_name = mysql_query("SELECT DISTINCT `name` FROM `common_words` ");
	while($row = mysql_fetch_array($result_c_name))
     {
          $name_ter[] = $row['name'];
	 }?>
<div class="container">
<h4 class="text-center text-success" style="font-size: 150%; font-weight: bold;"><?php echo $value ?></h4>
            <br />
    <div class="row">
		<div class="col-md-6">
           	<table class="table table-striped table-bordered">
						<?php
                        for($i=0;$i<=15;$i++)
                        {
                            $nam = $name_ter[$i] ?>
                        	<tr><td id="<?php echo $nam; ?>"><a onclick="call_kalai('<?php echo $nam; ?>','<?php echo $value; ?>');"><?php echo $nam; ?></a></td><td id="<?php echo "val_".$nam; ?>"></td></tr>
                            <?php } ?>
                        </table>
        </div>
        <div class="col-md-6">
           	<table class="table table-striped table-bordered">
						<?php
						$tot_ter = count($name_ter);
                        for($v=16;$v<$tot_ter;$v++)
                        {
                            $nam1 = $name_ter[$v]; ?>
                        	<tr><td id="<?php echo "val_".$nam1; ?>"></td>
                            <td id="<?php echo $nam1; ?>"><a onclick="call_kalai('<?php echo $nam1; ?>','<?php echo $value; ?>');">
							<?php echo $nam1; ?></a></td></tr>
                            <?php } ?>
                        </table>
        </div>
	</div>
</div>
<?php */?>

<?php
$result_c_name1 = mysql_query("SELECT DISTINCT `name` FROM `common_words` ");
	while($row1 = mysql_fetch_array($result_c_name1))
     {
          $name_ter1[]  =	$row1['name'];
		  $ta_names	 =	$row1['name'];
		  $qry_cw       =	mysql_query("(SELECT `eword` FROM `common_words` WHERE `meaning` LIKE '%$value%' AND `name` = '$ta_names')");
		  $count_wrds   =	mysql_num_rows($qry_cw);
		  $qry_cw1      =	mysql_query("(SELECT `eword` FROM `kalai_wrds` WHERE `meaning` LIKE '%$value%' AND `name` = '$ta_names')");
		  $count_wrds1  =	mysql_num_rows($qry_cw1);
			if($count_wrds >= 1 || $count_wrds1 >= 1)
			{
				//echo '<h3 class="text-success">Common</h3>';
				while($fet_cw  =	mysql_fetch_assoc($qry_cw))
				{
					$word_mean[]  = $fet_cw['eword'];
					
					//echo '<p class="glyphicon glyphicon-ok">&nbsp;&nbsp;'.$word_mean.'</p><br>';			    
				}
				//echo '<a href="http://www.tamilvu.org/" target="_blank"><h3 class="text-success">TVA</h3></a>';
				while($fet_cw1  =	mysql_fetch_assoc($qry_cw1))
				{
					$word_mean1[]  = $fet_cw1['eword'];
				
					//echo '<p class="glyphicon glyphicon-ok">&nbsp;&nbsp;'.$word_mean1.'</p><br>';			    
				}				
			}
			
			else
			{
				//echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை</h4>";
			}
	 }?>

<div class="container">
<h4 class="text-center text-success" style="font-size: 150%; font-weight: bold;"><?php echo $value ?></h4>
            <br />
    <div class="row">
		<div class="col-md-6">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <?php
     for($i=0;$i<16;$i++)
     {
     	$nam = $name_ter1[$i] ?>
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
				echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை</h4>"; 
			}
			if($word_mean1[$i] != "")
			{
	   			echo $word_mean1[$i].'<a href="http://www.tamilvu.org/" target="_blank">(TVA)</a><br />';
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை<a href='http://www.tamilvu.org/' target='_blank'>(TVA)</a></h4>"; 
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
     	$nam1 = $name_ter1[$s] ?>
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
				echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை</h4>"; 
			}
			if($word_mean1[$s] != "")
			{
	   			echo $word_mean1[$s].'<a href="http://www.tamilvu.org/" target="_blank">(TVA)</a><br />';
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை<a href='http://www.tamilvu.org/' target='_blank'>(TVA)</a></h4>"; 
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
<br/>
<?php }
?>



</body>

</html>