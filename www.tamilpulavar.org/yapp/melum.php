<?php
include("Yappuanalyzer.php");
include("transliterate.php");
include("../connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_POST['val']; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!--<script>
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
});
	</script>-->

<body>
<div align="center">
<h2><strong style="color:#F00">
<?php
echo $_POST['val'];
?>
</strong></h2>
</div>
<div class="col-md-12">
<div class="col-md-offset-4 col-md-4 col-md-offset-4">
<table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>அலகிடுதல்</strong>
     <button class="tt" id="gt1" title="ஒரு குறில் எழுத்து அல்லது நெடில் எழுத்து, தனியாகவோ மெய் எழுத்துடன் சேர்ந்தோ வருவது நேர் அசை எனப்படும்.">நேர்<i id="too" class="glyphicon glyphicon-question-sign"></i></button>
     <button class="tt" id="gt1" title="குறில், நெடில் ஆகிய இரண்டும் தொடர்ந்து வருவதும் இரண்டு குறில் எழுத்துகள் தொடர்ந்து வருவதும் நிரை அசை ஆகும்.">நிரை<i id="too" class="glyphicon glyphicon-question-sign"></i></button>
    </td></tr>
    <tr><td>
    <?php
		$p_parser = new Yappuanalyzer($_POST['val']);
    	$asai_detail = $p_parser->DisplaySyllableWordClass();
		echo $asai_detail."<br>";
	?>
    </td></tr></table>
    </div>
</div>
<div class="col-md-12">
    <div class="col-md-6">
     <table class=" table table-responsive table-striped table-bordered">
     <tr class="success"><td>
     <strong>எதுகை</strong>
     </td></tr>
     <tr><td>
     <?php
	 $val 		= $_POST['val'];	
     $val_en 	 = T2R($val); 	
	 $f_char1    = substr($val_en,2,2);
	 $f_char 	 = R2T($f_char1);
	 $qry  =	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `hdwrd` LIKE '_$f_char%' ")or die(mysql_error());
	 while($fet1 = 	mysql_fetch_array($qry))
		{
			$chk = T2R($fet1['hdwrd']);
			if($f_char1 == substr($chk,2,2))
				echo $fet1['hdwrd']."<br />";
				
		}
     ?>
     </td></tr>
     </table>
     </div>
    <div class="col-md-6">
    <table class=" table table-responsive table-striped table-bordered">
    <tr class="success"><td>
    <strong>மோனை</strong>
    </td></tr>
    <tr><td>
    <?php
	$val_en 	 = T2R($val); 	
	$f_char1    = substr($val_en,0,2);
	$f_char 	 = R2T($f_char1);
	$qry  =	mysql_query("SELECT `hdwrd` FROM `hwrd` WHERE `hdwrd` LIKE '$f_char%'")or die(mysql_error());
	while($fet1 = 	mysql_fetch_array($qry))
		 {
			 $chk = T2R($fet1['hdwrd']);
			 if($f_char1 == substr($chk,0,2))
				echo $fet1['hdwrd']."<br />";
		 }
    ?> 
    </td></tr></table>
    </div>
    	
</body>
</html>