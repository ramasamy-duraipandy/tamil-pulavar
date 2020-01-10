<?php
function sentance($string,$pass2)
{	
		
		//sentance($string,$pass2);
		//include_once('simple_html_dom.php');
		$output_string = file_get_html($string)-> plaintext;
		//mb_internal_encoding("UTF-8");
		//$output_string = str_replace($charsArr, '', $output_string);
		$arr = preg_split("/[\?\.\!\;]+/",$output_string);    
		$i=0;
		foreach($arr as $v)
		{
			$sentence = rtrim(ltrim($v," \n\r\t"));
			//echo $sentence."<br>";
			if (!preg_match('/[A-Za-z]/', $sentence)) // '/[^a-z\d]/i' should also work.
			{
			if(preg_match('/[\p{Tamil}]/u',$sentence))												
				{
			//echo $sentance."----------------insertion  <br>";
			/*$fetch_sentances = mysql_query("SELECT * FROM `sentance` WHERE `sentances` = '$sentance'");
			if(mysql_num_rows($fetch_sentances)) 
			{
        	//echo nl2br("$string already exists \n");
   			} 
			else 
			{*/
			if($sentence != " ")
			{
				$sentence_len = strlen($sentence);
				if( $sentence_len > 15 )
				{
					 $space = (preg_match('/\s/',$sentence));
					 if($space != "0")
					 {
						$split = explode(" ", $sentence);
						// Get the last value in the array.
						// count($split) returns the total amount of values.
						// Use -1 to get the index.
						$last_word = $split[count($split)-1];
						if(strlen($last_word) > 15)
						{
						//echo $sentence."<br>";
						mysql_query("INSERT INTO `sentance` (`sno`,`sentances`,`link_id`) VALUES ('NULL','$sentence','$pass2')");
						//}
					 	}
				     }
				}
			}
			}
			}
		}
	
	}
	?>