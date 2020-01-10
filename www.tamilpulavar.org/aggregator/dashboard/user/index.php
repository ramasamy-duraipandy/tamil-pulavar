<?php 
@session_start();
if($_SESSION['user_id'] == "")
{
	?>
	<script>
	window.location.href="../index.php";
	</script>
	<?php
}
//$user_id = $_SESSION['user_id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
var name = "<?php echo $_SESSION['user_id']; ?>";
$(function()
	{
		//alert(name);
	
	
	});

function myfn()
	{
		
	
    //var $btn = $(this).button('loading')
    // business logic...
   //$btn.button('reset') 
   
   $("#myButton").attr("disabled","disabled");
  	$("#imageprocess").show();
	var name = $("#url").val();
	$.ajax({
			url:"user/link.php",
			type:"POST",
			data:{"url":name},
			success: function(data) {
				//alert(data);
				if(data == 0)
				{
				successmessage = 'Already Submitted Website';
				$("#myButton").removeAttr("disabled");
				$("#imageprocess").hide();
				$("#successmessage").text(successmessage);
				}
				else if(data == 2)
				{
					$("#successmessage").text('No site Submitted!!!');
					$("#imageprocess").hide();
				}
				else if(data == 10)
				{
					//alert("finished");
					$("#fileprocess").text('finished!!!');
					$("#myButton").removeAttr("disabled");
					$("#imageprocess").hide();
				}
				
				/*else
				{
					
					$.ajax({
					url:"user/showprocess.php",
					data:{"user_id": name},
					type:"POST",
					success: function(data)
						{
							//alert(data);
							//var data = data;
							
							$("#fileprocess").html("<img src='user/loading-spinner.gif' height = '300' ></img>");
							$("#myButton").removeAttr("disabled");
						}
		});
		
					
					}*/
			}
		});
	
		
	};

</script>

</head>
<body>

<div class="col-md-8 col-md-offset-2">
<!--<form class="form-horizontal" action="link.php" method="post">-->

<div class="col-sm-6">
    <input type="text" class="form-control" id="url" placeholder="Enter Website" name="url" value="" required>
</div>
<div class="col-sm-3">
    <select class="form-control" name="keyword">
    <?php include("../connection.php"); 
	$results = mysql_query("SELECT * FROM `keywords` ORDER BY `keywords` ASC");
	while($row = mysql_fetch_assoc($results))
	{
		$key = $row['keywords'];
		?>
    <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
 	<?php } ?>
    </select>
</div>
<button onclick ="myfn();" class="btn btn-default" id="myButton"  autocomplete="off">
 Search 
 </button>



<!--</form>-->
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div id="successmessage" style="color:#F00; font-size:16px; margin-top:30px;" >
</div>
<div id="fileprocess" style="color:#F00; font-size:16px; margin-top:30px;">
</div>
<div id="imageprocess" style="display:none">
<img src='user/loading-spinner.gif' height = '300' ></img>
</div>
</div>
</div>

</body>
</html>