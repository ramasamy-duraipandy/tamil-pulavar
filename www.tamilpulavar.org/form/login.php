<?php @session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Checking....</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

</head>

<body>
<?php 
include("../connection.php");
$name = $_POST['email'];
$password = md5($_POST['pwd']);
$result = mysql_query("SELECT `sno`,`name`,`email` FROM `members` WHERE `email`='$name' AND `password`='$password' AND `activation`='1'");
$count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if($count > 0)
{
	if($row['email'] == "ultisoft15@gmail.com")
	{
		$_SESSION['id'] = $row['sno'];
		$_SESSION['name'] = $row['name'];
		header('Location:admin_dashboard.php');
	}
	else
	{
		$_SESSION['id'] = $row['sno'];
		$_SESSION['name'] = $row['name'];
		header('Location:dashboard.php');
	}
}
else
{
	echo "<script>alert('Invalid Username or Password');
	window.location.href='../index.php';</script>";
	session_destroy();
}
?>
</body>
</html>