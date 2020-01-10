<?php
@session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>தமிழ் சொற்களஞ்சியத் திட்டம்</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<style>
#contain
{
	color:#F00;

}
@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");

body {
    font-family: Open Sans;
    font-size: 14px;
    line-height: 1.42857;
    background: #333333;
    height: 350px;
    padding: 0;
    margin: 0;
}
.container-login {
    min-height: 0;
    width: 100%;
    color: #333333;
    margin-top: 40px;
    padding: 0;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container-login > section {
    margin-left: 0;
    margin-right: 0;
    padding-bottom: 10px;
}
#top-bar {
    display: inherit;
}
.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%;
}
.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}
.container-login .nav-tabs.nav-justified > li > a,
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #ea533f;
    border: medium none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
}
.container-login .nav-tabs.nav-justified > .active > a,
.container-login .nav-tabs.nav-justified > .active > a:hover,
.container-login .nav-tabs.nav-justified > .active > a:focus {
    background: #ffffff;
    color: #333333;
}
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #de2f18;
}
.tabs-login {
    background: #ffffff;
    border: medium none;
    margin-top: -1px;
    padding: 10px 30px;
}
.container-login h2 {
    color: #ea533f;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.container-login .checkbox {
    margin-top: -15px;
}
.container-login button {
    background-color: #ea533f;
    border-color: #e73e28;
    color: #ffffff;
    border-radius: 0;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    width: 100%;
}
.container-login button:hover,
.container-login button:focus {
    background: #de2f18;
    border-color: #be2815;
}
#login-access1
{
	display:none;
}
</style>
<script>
function call1()
{
	//alert("hai");
	$("#login-access").hide();
	$("#login-access1").show();
	$("#2").addClass("active");
	$("#1").removeClass("active");
}
function call()
{
	$("#login-access1").hide();
	$("#login-access").show();
	$("#1").addClass("active");
	$("#2").removeClass("active");
}
</script>
</head>

<body>

<div class="container" style="margin-top:10px;">
<div class="row">
<div class="col-md-11">
  <div class="col-xs-5 col-md-3">
    <a href="#" class="thumbnail">
      <img src="logo.png" alt="">
    </a>
  </div>
  <div class="col-xs-6 col-md-9">
  <h2 style="color:#FFF" class="text-center">சொற்றொடர் தொகுப்பாளர்</h2>
  </div>
  <div class="col-xs-1 col-md-1"></div>
</div>
</div>
<div class="login-body">
<div class="col-md-3">
</div>
<div class="col-md-6">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li id="1" class="active"><a onclick="call();">Login</a></li>
				<li id="2"><a onclick="call1();">Change Password</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i>&nbsp;Login</h2>						
					<form method="post" action="" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
                    	<div class="form-group ">
							<label for="login" class="sr-only">Username</label>
							<input type="text" class="form-control" id="inputEmail3" placeholder="username" name="user_name" value="">
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="">
						</div>
						
						<br/>
						<div class="form-group ">				
							<button type="submit" class="btn btn-default" name="submit" >Sign in</button>
						</div>
					</form>	
                     <div id="contain">
      </div>		
				</div>
                
                <div id="login-access1" class="tab-pane fade active in">
					<h2>Change Password&nbsp;&nbsp;<i class="glyphicon glyphicon-hand-down"></i></h2>						
					<form method="post" action="" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
                    	<div class="form-group ">
							<label for="login" class="sr-only">Username</label>
							<input type="text" class="form-control" id="inputEmail3" placeholder="username" name="user_name" value="">
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Old Password</label>
							<input type="password" class="form-control" id="inputPassword3" placeholder="Old Password" name="old_password" value="">
						</div>
                        <div class="form-group ">
							<label for="password" class="sr-only">New Password</label>
							<input type="password" class="form-control" id="inputPassword3" placeholder="New Password" name="new_password" value="">
						</div>
                        <div class="form-group ">
							<label for="password" class="sr-only">Retype New Password</label>
							<input type="password" class="form-control" id="inputPassword3" placeholder="Retype New Password" name="new_re_password" value="">
						</div>
						
						<br/>
						<div class="form-group ">				
							<button type="submit" class="btn btn-default" name="change">Change</button>
						</div>
					</form>	
                     <div id="msg">
     				 </div>		
				</div>
			</div>
		</section>
	</article>
</div>
</div>
<!--<div class="row">
<div class="col-md-8 col-md-offset-3">
<form class="form-horizontal" action="" method="post" >
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="user_name" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-default" name="submit" >Sign in</button>
      <div id="contain">
      </div>
    </div>
  </div>
</form>
</div>
</div>-->
</div>
<div class="footer navbar-fixed-bottom" >
              <div class="row">
                <div class="col-lg-12" style="color:#FFF; margin-left:15px;">
                    Designed by: <a href="http://www.ultisoft.in" target="_blank"><img src="uss_logo.png" /></a>
                </div>
        </div>
        </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include ("connection.php");
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$results = mysql_query("SELECT `role`,`user_id` FROM `members` WHERE `user_name`='$user_name' AND `password`='$password'");
$rows = mysql_fetch_assoc($results);
$role = $rows['role'];
$user_id = $rows['user_id'];
$_SESSION["user_id"] = $user_id;
if($role == "1")
{ 
	?>
	<script>
	window.location.href="dashboard/index.php";
	</script>
    <?php
}
elseif($role == "2")
{ ?>
	<script>
	window.location.href="dashboard/index.php";
	</script>
    <?php
}
elseif($role == "3")
{ 

?>
	<script>
	window.location.href="dashboard/index.php";
    </script>
<?php
}
else
{?>
	<script>
	document.getElementById("contain").innerHTML = "Wrong username or password!!..";
    </script>
<?php }
}
?>


<?php
if(isset($_POST['change']))
{
include ("connection.php");
$user_name = $_POST['user_name'];
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$new_re_password = $_POST['new_re_password'];

$results = mysql_query("SELECT `user_name`,`password`,`user_id` FROM `members` WHERE `user_name`='$user_name' AND `password`='$old_password'");
$acount = mysql_num_rows($results);
$rows = mysql_fetch_array($results);
$user_id = $rows['user_id'];
if($acount == 1)
{
	if($new_password == $new_re_password)
	{
	mysql_query("UPDATE `members` SET `password`='$new_password' WHERE `user_id`='$user_id'");
	echo "<script>alert('Password Changed Successfully');</script>";
	}
	else
	{?>
	<script>
	$("#login-access1").show();
	$("#login-access").hide();
	$("#2").addClass("active");
	$("#1").removeClass("active");
	document.getElementById("msg").innerHTML = "New passwords does not match";
    </script>
<?php }
}
else
{
	?>
	<script>
	$("#login-access1").show();
	$("#login-access").hide();
	$("#2").addClass("active");
	$("#1").removeClass("active");
	document.getElementById("msg").innerHTML = "username or password does not match!!..";
    </script>
<?php 
	
}

}
?>
