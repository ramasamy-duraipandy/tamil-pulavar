<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UI</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<SCRIPT language="JavaScript" src="ucedit/script/layout.js"></SCRIPT>
<SCRIPT language="JavaScript" src="ucedit/script/menus.js"></SCRIPT>

<SCRIPT language=JavaScript src="ucedit/script/common.js"></SCRIPT>
<SCRIPT language=JavaScript src="ucedit/script/tamil.js"></SCRIPT>
<SCRIPT language=JavaScript>incfont("Code2000","CODETamil")</SCRIPT>

<SCRIPT language="JavaScript">
SelectedTab = 2;
SelectedMenu = 2;
showTab();</SCRIPT>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(function() 
	{
		$("#sumt").click(function()
		{
			var txt	=	$("#gtext").val();
			//alert(txt);
			$.ajax({
				url:"process_nv.php",
				type:"POST",
				data:{cntnt:txt},
				success: function(data)
				{
					if(data == "")
						nxt_3(txt);
					else
					$("#disp").html(data);			
				}
				});
		});
    });
	
/*	function nxt_2(txt)
	{
		$.ajax({
				url:"process_inf.php",
				type:"POST",
				data:{cntnt:txt},
				success: function(data)
				{
					if(data == "")
						nxt_3(txt);
					else
					$("#disp").html(data);
				}
		});
	}*/
	function nxt_3(txt)
	{
		$.ajax({
				url:"process.php",
				type:"POST",
				data:{cntnt:txt},
				success: function(data)
				{
					/*if(data == "")
					 nxt_4(txt);
					else*/
					$("#disp").html(data);
				}
		});
	}
	/*function nxt_4(txt)
	{
		$.ajax({
				url:"process_sp_inf.php",
				type:"POST",
				data:{cntnt:txt},
				success: function(data)
				{
						$("#disp").html(data);
				}
		});
	}*/
		
</script>
</head>
<body>

<div class="row">
<div class="col-md-6 col-md-offset-3">

  
      <div class="form-group" div id="gt_area">
        <textarea class='converters' name="tword"  charset="utf-8" onKeyPress="javascript:convertThis(event)"
   onKeyDown="toggleKBMode(event)" required="required" cols="80" rows="10" id="gtext"></textarea>
      </div>
    
    <input type="button" id="sumt" value="submit" />
    
    </div>
     <div class="col-md-6 col-md-offset-3"  id ="disp">
    
    </div>
</div>
</body>
</html>