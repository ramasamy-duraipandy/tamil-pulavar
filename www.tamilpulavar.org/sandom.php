<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>சந்தத் தேடல்</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$("#sumsan").click(function()
{
	$("#ex").html("<center><img src='img/loading_spinner.gif'/></center>'");
	var sand = $("#sandom").val();
	$.ajax({
		url:"yapp/chandom.php",
		type:"POST",
		data:{"sand":sand},
		success: function(res)
		{
			$("#ex").html(res);
		}
	})

	});
	</script>
</head>

	
<body>
<?php
	include("Yappuanalyzer.php");
	include("transliterate.php");
	include("../connection.php");
  	$p_parser = new Yappuanalyzer($_POST['val']);
?>
    <div class="col-xs-6 col-xs-offset-3">
    
     <table class=" table table-responsive table-striped table-bordered">
     <tr class="success"><td>
     <strong>சந்தச் சொல் தேடல்</strong>
     </td></tr>
     <tr><td>
     <div class="form-group">
   <input type="text" name="gvesand" class="form-control converters" id="sandom" onKeyPress="javascript:convertThis(event)" charset="utf-8"/>
   <input type="submit" class="btn btn-success" name="submit" value="submit" id="sumsan" /> 
     </div>
     </td></tr>
     <tr><td>உதாரணம்:"தந்தானே......,லாலலலலா..."</td></tr>
     </table>
     </div>
    <div class="col-md-12 table-responsive col-xs-12" id="ex">
    </div> 
</body>
</html>