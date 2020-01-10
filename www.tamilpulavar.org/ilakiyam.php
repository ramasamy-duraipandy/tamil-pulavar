<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ilakiyam</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/tamil_pulavar.css"  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$("#resu").hide();
$('input.type').keyup(function()
		{
			var searchid = $(this).val();
			var dataString = 'key='+ searchid;
			if(searchid !='')
			{
			$.ajax({
			type: "POST",
			url: "ilaksearch.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#resu").html(html).show();
			}
			});
			}
			return false;
		 });
		 $("#resu").click(function(e){ 
			var $clicked = $(e.target);
			var $name = $clicked.find('.name').html();
			var decoded = $("<div/>").html($name).text();
			$('.type').val(decoded);
		});
		$(document).click(function(e) { 
			var $clicked = $(e.target);
			if (! $clicked.hasClass("type")){
			$("#resu").fadeOut(); 
			}
		});
$("#sumsan").click(function()
{
	$("#ex").html("<center><img src='img/loading_spinner.gif'/></center>'");
	var ilak = $("#ilak").val();
	$.ajax({
		url:"ilak.php",
		type:"POST",
		data:{"ilak":ilak},
		success: function(res)
		{
			$("#ex").html(res);
		}
	})
	});
	</script>
</head>
<body>

    <div class="col-xs-6 col-xs-offset-3">
    
     
     <center><a href="http://sangamconcordance.in/index.html" target="_blank"><strong>செம்மொழி இலக்கிய / இலக்கண தேடல்</strong>
     <h6>தொகுத்தளித்தவர்</h6>
     <h5>முனைவர்.ப.பாண்டியராஜா</h5></a>
   <h6>(மேனாள்:துணைமுதல்வர், தலைவர்,கணிதத்துறை இயக்குநர், கணினித்துறைஅமெரிக்கன் கல்லூரி, மதுரை)</h6></center>
    
     <div class="form-group">
   <input type="text" name="gvesand" class="form-control converters type" id="ilak" value="" onKeyPress="javascript:convertThis(event)" charset="utf-8"/>
    <div id="resu"  class="form-group" >
     </div>
  <center> <input type="submit" class="btn btn-success" name="submit" value="submit" id="sumsan" /></center> 
     </div>
     
     </div>
    <div class="col-md-12 table-responsive col-xs-12" id="ex">
    </div> 

</body>
</html>