<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ta_DOM</title>
</head>
<body>
<?php
/*$handle	= fopen("page1.htm","r+");
while(!feof($handle))
{
$string = fgets($handle,filesize("page1.htm"));	
echo $string;
		
}*/
//$rws	   =	explode("<td width=100 align=left valign=top>",$string);
//print_r($rws);

/*$doc = new DomDocument;
$doc->loadHTMLFile("page1.htm");
$tags= $doc->getElementsByTagName('td');
foreach ($tags as $tag) {
    $tag->textContent;
	
}
echo $doc->saveHTML();*/

include("simple_html_dom-master/simple_html_dom.php");
$html = new simple_html_dom();
$url  = "page1.htm";
$html = file_get_html($url);

foreach($html->find('table tr') as $row) {
    $head = $row->find('td', 0);
	$mean = $row->find('td', 1);
    echo $head;
	echo $mean; 
}

/*$handle	= fopen("page1.htm","r+");
$string 	= fread($handle,filesize("page1.htm"));	
$string	= strip_tags($string,"<p><br>");
echo $string;
exit;*/

?>
</body>
</html>