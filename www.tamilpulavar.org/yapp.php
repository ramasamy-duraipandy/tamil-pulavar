<?php
include("Yappuanalyzer.php");
include("transliterate.php");
include("../connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>யாப்பறிஞர்</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
 .tooltip-inner{
	 max-width:500px;
	width:500px;
	}
	.nirYasai
	{
		color:#F00;
	}
	.nE_rasai
	{
		color:#00F;
	}
</style>
<script>
$(function()
{
$("#rdm").hide();
$("#rde").hide();	
$("#mon").click(function(){
	$("#mon").hide();
	$("#rdm").toggle();
	});
$("#eth").click(function(){
	$("#eth").hide();
	$("#rde").toggle();
	});
$("#mon1").click(function(){
	$("#rdm").toggle();
	$("#mon").show();
	});
$("#eth1").click(function(){
	$("#rde").toggle();
	$("#eth").show();
	});

	
$('.tt').tooltip({placement:"bottom"}); 
	
});
</script>
<body>
<?php
  	$p_parser = new Yappuanalyzer($_POST['val']);
	?>
    <div class="col-md-12 col-xs-12">
    <div class="col-md-4 col-xs-12">
    <table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>அலகிடுதல்</strong>
     <button class="tt" id="gt1" title="ஒரு குறில் எழுத்து அல்லது நெடில் எழுத்து, தனியாகவோ மெய் எழுத்துடன் சேர்ந்தோ வருவது நேர் அசை எனப்படும்.">நேர்<i id="too" class="glyphicon glyphicon-question-sign"></i></button>
     <button class="tt" id="gt1" title="குறில், நெடில் ஆகிய இரண்டும் தொடர்ந்து வருவதும் இரண்டு குறில் எழுத்துகள் தொடர்ந்து வருவதும் நிரை அசை ஆகும்.">நிரை<i id="too" class="glyphicon glyphicon-question-sign"></i></button>
    </td></tr>
    <tr><td>
    <?php
    	$asai_detail = $p_parser->DisplaySyllableWordClass();
		echo $asai_detail."<br>";
	?>
    </td></tr></table>
    </div>
    	
    <div class="col-md-4 col-xs-12">
    <table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>எதுகை</strong>
    <button class="tt" id="gt1" title="அடி எதுகை
        அடிதோறும் முதல் சீர்களிலும் இரண்டாம் எழுத்து ஒன்றி வருவது அடி
எதுகை ஆகும்.
(எ.கா.) பேழையுள் இருக்கும் பாம்பென உயிர்க்கு
               ஏழையினைக் கண்டனம் எனமே”
இணை எதுகை 1, 2
        ஓரடியில் முதல் இரு சீர்களில் வரும் எதுகை இணை எதுகை ஆகும்
(எ.கா) “இன்மையுள் இன்மை விருந்தொறால்”
பொழிப்பு எதுகை 1, 3
        ஓரடியில் முதல் சீரிலும் மூன்றாம் சீரிலும் வரும் எதுகை பொழிப்பு எதுகை
ஆகும்.
(எ.கா) “தோன்றின் புகமொடு தோன்றுக”
ஒரூஉ எதுகை 1.4
           ஓரடியில் முதல் சீரிலும் நான்காம் சீரிலும் வரும் எதுகை ஓரூஉ எதுகை
ஆகும்.
(எ.கா) “ஒழுக்கத்தின் எய்துவர் மேன்மை இழுக்கத்தின்”
கூழை எதுகை 1, 2, 3
         ஓரடியில் முதல் மூன்று சீர்களிலும் வரும் எதுகை கூழை எதுகை ஆகும்.
(எ.கா) “பற்றுக பற்றற்றான் பற்றிணை”
கீழ்க்கதுவாய் எதுகை 1, 2, 4
        ஓரடியில் முதலாம் இரண்டாம், நான்காம் சீர்களிலும் வரும் எதுகை
கீழ்க்கதுவாய் எதுகை ஆகும்.
(எ.கா) செல்வத்துள் செல்வம் செவிச் செல்வம்
மேற்கதுவாய் எதுகை 1, 3, 4
         ஓரடியில் முதலாம், மூன்றாம் நான்காம் சீர்களில் வரும் எதுகை
மேற்கதுவாய் எதுகை ஆகும்.
“கற்க கசடற கற்பவை கற்றபின்”
முற்று எதுகை 1, 2, 3, 4
          ஓரடியில் நான்கு சீர்களிலும் எதுகை வந்தால் அது முற்று எதுகை ஆகும்.
(எ.கா) துப்பார்க்குத் துப்பாய துப்பாக்கித் துப்பார்க்குத்
இயைபுத் தொடை         ஒரு செய்யுளின், அடிகளிலும் சீர்களிலும் அசையோ, சீரோ ஒன்றி வருவது இயைபுத்தொடையாகும்.
(எ.கா) திங்களைப் போற்றுதும் திங்களைப் போற்றுதும்
">
<i id="too" class="glyphicon glyphicon-question-sign"></i>
</button>

</td></tr>
<tr><td>
       <?php
    	 $val 		= $_POST['val'];
		 $val_en 	 = T2R($val); 	
		 $f_char1    = substr($val_en,2,2);
		 $f_char 	 = R2T($f_char1);
		 //echo $f_char; 
		// echo"SELECT `hdwrd` FROM `hwrd` WHERE `hdwrd` LIKE '_$f_char%'"; 	
		// exit;
		 $qry  =	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `hdwrd` LIKE '_$f_char%' LIMIT 4")or die(mysql_error());
		 while($fet1 = 	mysql_fetch_array($qry))
		 {
			  $chk = T2R($fet1['hdwrd']);
			  if($f_char1 == substr($chk,2,2))
				 echo $fet1['hdwrd']."<br />";
		 }
	?>
     <!-- <form target="_blank" id="myform" method="post" action="yapp/ethugai.php">
      <input type="hidden" name="val" value="<?php //echo $_POST['val']; ?>" /> 
      <a onclick="document.getElementById('myform').submit();">மேலும்</a>
      </form>-->
    </td></tr></table>
    </div>
    </div>
    <div class="col-md-12 col-xs-12 ">
    
    <div class="col-md-4 col-xs-12">
    <table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>மோனை</strong>
<button class="tt" id="gt" title="அடிமோனை
         அடிதோறும் முதற்சீரின் முதலெழுத்து ஒன்றி வருவது அடிமோனை ஆகும்.
(எ.கா) ஓடி விளையாடு பாப்பா - நீ
        ஓய்ந்திருக்கலாகாது பாப்பா
இணை மோனை 1, 2
          ஓரடியில் முதல் இரு சீர்களில் வரும் மோனை இணை மோனை ஆகும்.
(எ.கா) “இறந்தார் இறந்தா ரனையர் சினத்தை”
பொழிப்பு மோனை 1, 3
          ஓரடியில் முதல் சீரிலும் மூன்றாம் சீரிலும் வரும் மோனை பொழிப்பு
மோனை ஆகும்.
(எ.கா) பேழையுள் இருக்கும் பாம்பென உயிர்க்கும்
ஓரூஉ மோனை 1, 4
         ஓரடியில் முதல் சீரிலும் நான்காம் சீரிலும் வரும் மோனை ஓரூஉ மோனை
ஆகும்.
(எ.கா) ஒழுக்கம் விழுப்பம் தரலான் ஒழுக்கம்
கூழை மோனை 1, 2, 3
          ஓரடியில் முதல் மூன்று சீர்களிலும் வரும் மோனை கூழை மோனை ஆகும்.
(எ.கா) “கல்விக் கரையில கற்பவர் நாற்சில”
கீழ்க்கதுவாய் மோனை 1, 2, 4
         ஓரடியில் முதல் சீர், இரண்டாம் சீர், நான்காம் சீர் போன்றவற்றில் வரும்
மோனை கீழ்க்கதுவாய் மோனை ஆகும்.
(எ.கா) “அற்றார் அழிபசி தீர்த்தல் அஃதொருவன்”
மேற்கதுவாய் மோனை 1, 3, 4
        ஓரடியில் ஒன்று, மூன்று, நான்காம் சீர்களில் வரும் மோனை மேற்கதுவாய் மோனை ஆகும்.
(எ.கா) “வானின்று உலகம் வழங்கி வருதலால்”
முற்று மோனை
        ஓரடியில் நான்கு சீர்களிலும் வரும் மோனை முற்று மோனை
(எ.கா) கற்க கசடற கற்பவை கற்றபின்">
<i id="too" class="glyphicon glyphicon-question-sign"></i>
</button>
</td></tr>
<tr><td>
    <?php
		
		 $val 		= $_POST['val'];
		 $val_en 	 = T2R($val); 	
		 $f_char1     = substr($val_en,0,2);
		 $f_char 	 = R2T($f_char1);
		 //echo $f_char;  	
		 $qry  =	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `hdwrd` LIKE '$f_char%' LIMIT 4")or die(mysql_error());
		 while($fet1 = 	mysql_fetch_array($qry))
		 {
			 $chk = T2R($fet1['hdwrd']);
			 //echo $f_char1." ".$chk;
			// exit;
			 if($f_char1 == substr($chk,0,2))
				 echo $fet1['hdwrd']."<br />";
		 }
	?>
      <!-- <form target="_blank" id="myform1" method="post" action="yapp/monai.php">
       <input type="hidden" name="val" value="<?php //echo $_POST['val']; ?>" /> 
       <a onclick="document.getElementById('myform1').submit();" >மேலும்</a>
       </form>-->
    </td></tr></table>
    <form target="_blank" id="myform1" method="post" action="yapp/melum.php">
    <input type="hidden" name="val" value="<?php echo $_POST['val']; ?>" /> 
    <a onclick="document.getElementById('myform1').submit();" style="cursor:pointer">மேலும்</a>
    </form>
    </div>
    <div class="col-md-4 col-xs-12">
    <table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>எழுத்து எண்ணிக்கை</strong>
    </td></tr>
    <tr><td>
    <?php
    	$letter_detail = $p_parser->DisplayLetterCount();
		echo $letter_detail."<br>";
	?>
    </td></tr></table> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>
    </div>
     <!--<div class="col-md-8 col-md-offset-2">
     
     </div>-->
    
</body>
</html>