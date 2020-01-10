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
$text=preg_replace('/_([kGcJTNtnpmyrlvZLRVjSsh])/','$1்',$text);
foreach($tameng as $key=>$value)
{
	$text=str_replace($value,$key,$text);
}
$text=str_replace(array("a","B","Q"),array("","ௌ","ை"),$text);
$text=str_replace("_","",$text);
return($text);
}
$Nedil_Elzuthu	= array('_A','A','_I','I','_U','U','_E','E','_Y','_O','O');

?>