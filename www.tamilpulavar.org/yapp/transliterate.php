<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trans-literate</title>
</head>
<body>
<?php
function T2R($text)
{
$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_e',
'ஏ' => '_E',
'ஐ' => '_Y',
'ஒ' => '_o',
'ஓ' => '_O',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'R',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'e',
'ே' => 'E',
'ை' => 'Y',
'ொ' => 'o',
'ோ' => 'O',
'ௌ' => 'W',
'்' => 'X',
'ஃ' => '_K'
);

foreach($tameng as $key=>$value)
{
	$text=str_replace($key,$value,$text); 
}
//print_r();
$text=preg_replace('/([kGcJTNtnpmyrlvZLRVjSsh])X/','_$1',$text);

$text=preg_replace('/(?<!_)([kGcJTNtnpmyrlvZLRVjSsh])(?![aAiIuUeEoOYW])/','$1a',$text);

$text = preg_replace('/(_[kGcJTNtnpmyrlvZLRVjSsh])(_[aAiIuUeEoOYW])/','$1_$2',$text);

return($text);

}

/*-----------------------------------convert Tamil to Eng-------------------------------*/


function R2T($text)
{

$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_e',
'ஏ' => '_E',
'ஐ' => '_Y',
'ஒ' => '_o',
'ஓ' => '_O',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'R',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'e',
'ே' => 'E',
'ை' => 'Y',
'ொ' => 'o',
'ோ' => 'O',
'ௌ' => 'W',
'ஃ' => '_K',
);

//return($text);

$text=preg_replace('/_([kGcJTNtnpmyrlvZLRVjSsh])/','$1்',$text);


foreach($tameng as $key=>$value)
{
	$text=str_replace($value,$key,$text);
}

$text=str_replace(array("a","B","Q"),array("","ௌ","ை"),$text);
$text=str_replace("_","",$text);

return($text);

}


?>
</body>
</html>