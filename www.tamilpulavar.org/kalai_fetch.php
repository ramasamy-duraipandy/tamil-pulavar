<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>t</title>
</head>

<body>
 <?php
 //error_reporting(0);
 include('connection.php');
	$ta_names  = $_POST['nam'];
	$value  = $_POST['val'];		
			echo '<div>';
			
           //echo '<h3 class="panel-title">'.$ta_names.'</h3>';
            $qry_cw        =	mysql_query("(SELECT `eword` FROM `common_words` WHERE `meaning` LIKE '%$value%' AND `name` = '$ta_names')");
			$count_wrds   = mysql_num_rows($qry_cw);
			 $qry_cw1        =	mysql_query("(SELECT `eword` FROM `kalai_wrds` WHERE `meaning` LIKE '%$value%' AND `name` = '$ta_names')");
			$count_wrds1   = mysql_num_rows($qry_cw1);
			if($count_wrds >= 1 || $count_wrds1 >= 1)
			{
				echo '<h3 class="text-success">General Definition</h3>';
				while($fet_cw  =	mysql_fetch_assoc($qry_cw))
				{
					$word_mean  = $fet_cw['eword'];
					
					echo '<p class="glyphicon glyphicon-ok">&nbsp;&nbsp;'.$word_mean.'</p><br>';			    
				}
				echo '<a href="http://www.tamilvu.org/" target="_blank"><h3 class="text-success">TVA Technical Terminology</h3></a>';
				while($fet_cw1  =	mysql_fetch_assoc($qry_cw1))
				{
					$word_mean1  = $fet_cw1['eword'];
				
					echo '<p class="glyphicon glyphicon-ok">&nbsp;&nbsp;'.$word_mean1.'</p><br>';			    
				}				
			}
			else
			{
				echo "<br><br><h4 style='color:#f45013;'>தேடும் சொல் இந்த அகராதியில் இல்லை</h4>";
			}
            echo "</div>";
?>
</body>
</html>