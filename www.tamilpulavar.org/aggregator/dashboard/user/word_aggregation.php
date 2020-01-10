<?php 
function word($string)
{

		$output_string=file_get_html('http://'.$string)->plaintext;
		
 		$charsArr = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H',
 		'h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u',';',
 		'V','v','W','w','X','x','Y','y','Z','z','1','2','3','4','5','6','7','8','9','0','(',')',
		'-','_','!','|','.',':','"','“','?','”','&','/','≡','»'); 
		mb_internal_encoding("UTF-8");
		$output_string = str_replace($charsArr, '', $output_string);
		$arr = preg_split("/[\s,]+/",$output_string);
		$i=0;
		foreach($arr as $v)
		{
		$v=trim($v);
		$len=mb_strlen($v);
		echo $len."<br>";
		$m=mb_substr($v,$len-1,1);
		if($m=="்")
		{
		$m=mb_substr($v,$len-2,1);
		if($m=="த"||$m=="ப"||$m=="ச"||$m=="க")
		{
		$s=mb_substr($v,0,$len-2);
		
		if($s!=" ")
		mysql_query("INSERT INTO `words` (`sno`,`words`,`link_id`) VALUES ('NULL','$s','NULL')");
	  	
		}
		else
		{
		//echo $v."<br>";
		if($s!=" ")
		mysql_query("INSERT INTO `words` (`sno`,`words`,`link_id`) VALUES ('NULL','$v','NULL')");
	  	
		}
		}
		else
		{
		if($s!="")
		mysql_query("INSERT INTO `words` (`sno`,`words`,`link_id`) VALUES ('NULL','$v','NULL')");
	  
		}
		}
		
}
?>