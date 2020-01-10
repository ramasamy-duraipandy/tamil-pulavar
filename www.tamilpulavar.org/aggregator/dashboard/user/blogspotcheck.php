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

</head>
<body>
<form action="link.php" method="post">
<div class="col-md-8 col-md-offset-2">
<!--<form class="form-horizontal" action="link.php" method="post">-->

<div class="col-sm-6">
    <input type="text" class="form-control" id="url" placeholder="Enter Website" name="url" value="" required>
</div>
<div class="col-sm-3">
    <select class="form-control" name="keyword">
    <?php include("../connection.php"); 
	$results = mysql_query("SELECT * FROM `keywords`");
	while($row = mysql_fetch_assoc($results))
	{
		$key = $row['keywords'];
		?>
    <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
 	<?php } ?>
    </select>
</div>
<button type="submit" class="btn btn-default" id="myButton"  autocomplete="off">
 Search 
 </button>
</div>


<!--</form>-->
</div>
</div>

</form>

</body>
</html>

