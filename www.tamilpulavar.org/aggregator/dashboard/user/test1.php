<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
</head>
<body>
<?php 
include("../../connection.php");
$result = mysql_query("SELECT * FROM `sentance`");
$j =0;
while($row = mysql_fetch_assoc($result))
{
	$sentence = $row['sentances'];
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
			//$sentence1 = str_replace($last_word,"",$sentence);	
			echo $sentence."---->1<br>";
			$j++;
			}
			//echo $sentence."------>".$sentence_len."<br>";
		 }
	}
	
}
echo $j;
?>
</body>
</html>