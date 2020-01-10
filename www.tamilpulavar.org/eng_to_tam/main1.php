<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UI</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
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
					alert(data);		
				}

				});
			
		});
        
    });	
		
</script>
<body>
<div id="gt_area" align="center">
<textarea cols="60" rows="10" id="gtext" ></textarea>
</br>
<input type="button" id="sumt" value="submit" /> 
</div>
</body>
</html>