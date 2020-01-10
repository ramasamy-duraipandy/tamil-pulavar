<?php 
@session_start();
error_reporting(0);
ini_set('max_execution_time',0);
if($_SESSION['user_id'] == "")
{
	?>
	<script>
	window.location.href="../index.php";
	</script>
	<?php
}
$user_id = $_SESSION['user_id'];
?>

<?php
	
	include('../../simple_html_dom.php');
	date_default_timezone_set("Asia/Kolkata"); 
	include("../../connection.php");
	$url1=$_POST['url'];
	$dupesql_check11 = mysql_query ("SELECT * FROM `links` where (`links`='$url1')");
	if(mysql_num_rows($dupesql_check11) != 0)
	{
		echo "0";
		exit;
	}
	if($url1 != "")
	{
		if (strpos($url1, 'http') !== false) 
		{
    	//checking for url that contains http or not
		$seg = explode('/', $url1);
		$url_contains=$seg[0];
		$url_contains1=@$seg[2];
		$base_url = $url_contains."//".$url_contains1;
		}
		else
		{
			$base_url="http://".$url1;
		}
		
		$split_check = explode('/', $base_url);
		$common_url = $split_check[0];
		//echo "first-".$common_url."<br>";
		$external_url = @$split_check[2];
		//echo "second-".$external_url."<br>"; 
		//exit;
		$dupesql = "SELECT * FROM `links` where (links='$base_url')";
		$r=0; $rr = 0;
	  	$duperaw = mysql_query($dupesql);
	    if( mysql_num_rows($duperaw) ) 
		{
        //echo nl2br("$string already exists \n");
   		 } 
    	else 
		{
			$link_id = time() . rand(12*55, 134*54);
			$date = date('d-m-Y H:i:s');
			mysql_query("INSERT INTO `links` (`id`,`links`,`links_id`,`user_id`,`created_at`) VALUES ('NULL','$url1','$link_id','$user_id','$date')");
		}
			$html = file_get_contents($base_url);
			//Create a new DOM document
			$dom = new DOMDocument;
			
			//Parse the HTML. The @ is used to suppress any parsing errors
			//that will be thrown if the $html string isn't valid XHTML.
			@$dom->loadHTML($html);
			
			//Get all links. You could also use any other tag name here,
			//like 'img' or 'table', to extract other tags.
			$links = $dom->getElementsByTagName('a');
			
			//Iterate over the extracted links and display their URLs
			foreach ($links as $link){
				//Extract and show the "href" attribute.
				// echo $link->nodeValue;
			$fetch_link_first = $link->getAttribute('href');
				$find = '/^#/';				
			//echo $fetch_link."<br>";
			if(strpos($fetch_link_first,'http')!== false) 
			{
				$fetch_link = $fetch_link_first;
			}
			else
			{
			 if(preg_match($find,$fetch_link_first) == 1) 
			 {
				 
			 }
			 else
			 {
				$fetch_link = "http://".$external_url."/".$fetch_link_first;
			 }
			}
			//exit;
		$random = time() . rand(10*48, 100*98);
	  	$dupesql6 = "SELECT * FROM `sublinks` where (`sublink`='$fetch_link')";
	  	$duperaw6 = mysql_query($dupesql6);
	    if(mysql_num_rows($duperaw6)) 
		{
        //echo nl2br("$string already exists \n");
   		} 
    	else 
		{
		
		if(strpos($fetch_link,$external_url)!== false) 
		{
			//echo "hai";
		$id=mysql_query("SELECT `links_id` FROM `links` WHERE `links`='$url1'")or die(mysql_error());
		$row = mysql_fetch_array($id);
		$final_id=$row['links_id'];
	 	mysql_query("INSERT INTO `sublinks` (`sno`,`sublink`,`sublink_id`,`mainlink_id`,`checked`,`finished`,`user_id`) VALUES     ('NULL','$fetch_link','$random','$final_id','0','0','$user_id')")or die(mysql_error());
		}
		}
	}	
	}
	else
	{
		echo "2";
		exit;
	}
	  
	
	

	
	include('sentance_aggregation_dom.php');
	include('word_aggregation.php');
	// for continous execution of link
	$v = 0;
	function recu($user_id,$finals_ids)
	{
	$r=0;
	$final_id = $finals_ids;
	$results = mysql_query("SELECT * FROM `sublinks` WHERE `user_id`='$user_id' AND `checked` = '0' AND `mainlink_id`	='$final_id'");
	while($row_link = mysql_fetch_assoc($results))
	{
		$link_sub[$r] = $row_link['sublink'];
		$sublink_id[$r] = $row_link['sublink_id'];
		$r++;
	}
	for($p=0;$p < $r;$p++)
	{
		$link_with_http = $link_sub[$p];
		if($link_with_http != "")
		{
		$split_check = explode('/', $link_with_http);
		$common_url = $split_check[0];
		//echo "first-".$common_url."<br>";
		$external_url = @$split_check[2];
		//echo "second-".$external_url."<br>"; 
		//exit;
		$html = file_get_contents($link_with_http);
			//Create a new DOM document
			$dom = new DOMDocument;
			
			//Parse the HTML. The @ is used to suppress any parsing errors
			//that will be thrown if the $html string isn't valid XHTML.
			@$dom->loadHTML($html);
			
			//Get all links. You could also use any other tag name here,
			//like 'img' or 'table', to extract other tags.
			$links = $dom->getElementsByTagName('a');
			
			//Iterate over the extracted links and display their URLs
			foreach ($links as $link){
				//Extract and show the "href" attribute.
				// echo $link->nodeValue;
			$fetch_link_first = $link->getAttribute('href');
				$find = '/^#/';	
			//echo $fetch_link."<br>";
			if(strpos($fetch_link_first,'http')!== false) 
			{
				$fetch_link = $fetch_link_first;
			}
			else
			{
				if(preg_match($find,$fetch_link_first) == 1) 
			 {
				 
			 }
			 else
			 {
				$fetch_link = "http://".$external_url."/".$fetch_link_first;
			 }
 			}
		$random = time() . rand(10*48, 100*98);
	  	$dupesql = "SELECT * FROM `sublinks` where (sublink='$fetch_link')";
	  	$duperaw = mysql_query($dupesql);
	    if( mysql_num_rows($duperaw) ) 
		{
        //echo nl2br("$string already exists \n");
   		 } 
    	else 
		{
			if (strpos($fetch_link,$external_url ) !== false) 
		{
		
	 	mysql_query("INSERT INTO `sublinks` (`sno`,`sublink`,`sublink_id`,`mainlink_id`,`checked`,`finished`,`user_id`) VALUES     ('NULL','$fetch_link','$random','$final_id','0','0','$user_id')")or die(mysql_error());
		}
		}
	}	
	}
	mysql_query("UPDATE `sublinks` SET `checked`='1' WHERE `sublink_id` = '$sublink_id[$p]' ");	
	//echo "No Of files processed".$v++;	
	}
	}
		
		
	
	
	
	link:
	$id=mysql_query("SELECT `links_id` FROM `links` WHERE `links`='$url1'")or die(mysql_error());
	$row = mysql_fetch_array($id);
	$finals_ids=$row['links_id'];
	$results_final = mysql_query("SELECT * FROM `sublinks` WHERE `user_id`='$user_id' AND `checked` = '0' AND `mainlink_id`='$finals_ids'");
	$count_final = mysql_num_rows($results_final);
	if($count_final != 0)
	{
	recu($user_id,$finals_ids);
	$results_final11 = mysql_query("SELECT * FROM `sublinks` WHERE `user_id`='$user_id' AND `checked` = '1' AND `mainlink_id`='$finals_ids'"    );
	//mb_internal_encoding("UTF-8");
	while($res_row = mysql_fetch_assoc($results_final11))
	{
		$string = $res_row['sublink'];
		$pass2 = $res_row['sublink_id'];
		sentance($string,$pass2);
		word($string);
		mysql_query("UPDATE `sublinks` SET `finished`='1' WHERE `sublink_id`='$pass2'");
		//include("../../connection.php");
	}
	goto link;
	}
	else
	{
	}
	
	echo "10";
	exit;
?>
