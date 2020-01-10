<?php @session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invalid Permission</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function call()
{
	window.location.href="../index.php";
}
</script>
</head>

<body>
<?php @session_destroy(); ?>
<div class="container">
	<div class="row">
    <div class="col-md-3 col-md-offset-4 col-xs-12" style="margin-top:120px;">
    <img src="img/alert-icon.png" class="img-responsive" />
    <h4 class="text-danger text-center">Invalid Access !!!</h4>
    <center><button class="btn btn-danger" onclick="call();">Go Home</button></center>
    </div>
    </div>
    </div>
    
</body>
</html>