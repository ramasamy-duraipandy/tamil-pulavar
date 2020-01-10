<?php @session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP Contact Form Redirect</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


<?php
include("../connection.php");
//load the variables form address bar
$name = $_REQUEST["name"];
$pwd = $_REQUEST["pwd"];
$cnfpwd = $_REQUEST["cnfpwd"];
$from = $_REQUEST["email"];
$verif_box = $_REQUEST["verif_box"];

//remove the backslashes that normally appears when entering " or '
$name = stripslashes($name); 
$password = $pwd;
$salt = "aB1cD2eF3G";
$md5_pwd = md5($pwd);
//$verification = md5($salt.$password); 
$from = stripslashes($from); 
$subject = "Account Verfication";
// check to see if verificaton code was correct



$result_email = mysql_query("SELECT * FROM `members` WHERE `email`='$from'");
$count_email = mysql_num_rows($result_email);

if((md5($verif_box).'a4xn' == $_COOKIE['tntcon'])&&($cnfpwd == $pwd) && $count_email == 0)
{
	// if verification code was correct send the message and show this page
	$message = "Hi ".$name."\n";
	$message = "Your verfication code:http://tamilpulavar.org/form/verify.php?code=".$verification;
	//mail($from, 'Online Form: '.$subject, $message, "From:admin@tamilpulavar.org");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	mysql_query("INSERT INTO `members`(`sno`, `name`,`email`, `password`, `activation`) VALUES ('NULL','$name','$from','$md5_pwd','1') ");
	$result_wrd 	 = mysql_query("SELECT `sno` FROM `members` WHERE `email`='$from' AND `password`='$md5_pwd' AND `activation`='1'");
	$row_wrd 		= mysql_fetch_array($result_wrd);
	
	$_SESSION['id'] = $row_wrd['sno'];
	header('Location:dashboard.php');
}
elseif($cnfpwd != $pwd)
{
	// if verification code was incorrect then return to contact page and show error
	
	echo "<script>alert('Mismatch confirm password');
	window.location.href='../index.php';</script>";

}
elseif($count_email != 0)
{
	echo "<script>alert('Email already registered');
	window.location.href='../index.php';</script>";
}
else
{
	echo "<script>alert('Wrong Code');
	window.location.href='../index.php';</script>";
}
?>
</body>
</html>
