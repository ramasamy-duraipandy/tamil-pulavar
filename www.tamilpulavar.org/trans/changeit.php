<?php
include_once "diCrunch/swap.php";
include_once "transliterate.php";
include_once "cook.php";
/*$text			   =	"அவனைத் திருமணம் கொள்வதன்";
$source	  		 = 	"dtamil";
$target	  		 =	"telugu";
echo changeit($text,$target);*/
function changeit($text,$target)
{
$text			   =	$text;
$source	  		 = 	"dtamil";
$target	  		 =	$target; //cologne telugu kannada malayalam*/
$_SESSION['src']	=	"dtamil";
$_SESSION['tgt']	=	$target;
cook("avagra");
cookrad("melanu");
cookrad("pchillu");
cookrad("remkhata");
cookrad("aremkhata");
cookrad("conyab");
cookrad("aconyab");
cookrad("wava");
cookrad("yayya");
cook("finalm");
cook("finala");
cook("removedia");  
cook("replacesha");
cook("ri");
cook("taom");
cook("nna");
cook("ksha");
cook("knukta");
cook("oldbur");
cook("transc");
cook("mau");
cook("mtrad");
cook("vabab");
cook("level2");
cook("sanpali");
cook("disaddak");
cook("guruvisarg");
cook("vaba");
cook("stanu");
cook("spac");
cook("virem");
cook("normra");
cook("yaphala");
cook("shorta");
cook("anugna");
cook("transthai");
cook("nature");
cook("tavarga1");
cook("tasub");
cook("remshrturd");
cook("removedot");
cook("haaru");
cook("santextag");
if($_SESSION['tgt']=="telugu" || $_SESSION['tgt']=="kannada" ) 
{
$_SESSION['melanu'] = 2;
$_SESSION['finalm'] = 1;
$_SESSION['removedot']= 1 ;
}
if($_SESSION['tgt']=="malayalam")
{
$_SESSION['finalm'] =1;
$_SESSION['melanu'] = 1;
$_SESSION['removedot']= 1 ;
}
$final	   		  =	transliterate($text,$source,$target);
return $final;
}
?>