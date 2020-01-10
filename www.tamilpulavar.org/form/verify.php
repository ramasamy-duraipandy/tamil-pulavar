<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verification</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<?php 
$act_code = $_REQUEST['code'];
include('../connection.php');
$result_act = mysql_query("SELECT `sno` FROM `members` WHERE `activation`='$act_code'");
$count_act = mysql_num_rows($result_act);
$row_act = mysql_fetch_array($result_act);
if($count_act == 1)
{
	$no = $row_act['sno'];
	mysql_query("UPDATE `members` SET `activation`='1' WHERE `sno`='$no'");
	?>
    <div class="row">
    <div class="col-md-6 col-md-offset-4 " style="margin-top:120px;">
    <img src="img/success.png" class="img-responsive" />
    <h4 class="text-success">Your account has been activated Successfully!!!</h4>
    </div>
    </div>
    
    <?php
	header('refresh:3;url=../index.php');
}
else
{ ?>
	<div class="row">
    <div class="col-md-6 col-md-offset-4 " style="margin-top:120px;">
    <img src="img/big_oops.png" class="img-responsive" />
    <?php
	$no = $row_act['sno'];
	$result_act1 = mysql_query("SELECT * FROM `members` WHERE `activation`='1' AND `sno`='$no'");
	$count_act1 = mysql_num_rows($result_act1);
	if($count_act1  == 1)
	{
	?>
	 <h4 class="text-danger ">Already activated !!!</h4>
	<?php 
	}
	else
	{
		?>
    <h4 class="text-danger ">Your account has not been activated !!!</h4>
    <?php } ?>
    </div>
    </div>
    <?php
	header('refresh:3;url=../index.php');
}
?>
</div>
</body>
</html>