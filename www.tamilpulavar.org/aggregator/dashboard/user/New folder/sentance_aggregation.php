<?php 
function sentance($string,$ref_id)
{	 
		include("../connection.php");
		//include('../simple_html_dom.php');
		echo 'http://'.$string;
		header('Content-type: text/plain');
		$homepage = file_get_contents('http://'.$string);
		//$homepage = htmlentities($homepage);
		$homepage = strip_tags($homepage);
		$sentence = explode(".",$homepage);
		//print_r($sentence);
		//exit;
 		//mb_internal_encoding("UTF-8");
		//$output_string = str_replace($charsArr, '', $output_string);
		//$arr = preg_split("[\?\.\!]+",$output_string);    
		//$i=0;
		
		foreach($sentence as $sentences)
		{
			
		mysql_query("INSERT INTO `sentance` (`sno`,`sentances`,`link_id`) VALUES ('NULL','$sentences','$ref_id')");
		
		//$word = explode(" ",$sentences);
//		foreach($word as $words)
//				{
//					if(empty($words))
//					{
//				
//					}
//					else
//					{
//					mysql_query("INSERT INTO `words` (`sno`,`words`,`link_id`) VALUES ('NULL','$words','$ref_id')");	
//					}
//	  			}
	  	}
		
		
		
	
}
?>