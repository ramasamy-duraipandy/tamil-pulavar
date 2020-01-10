<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="row">
     <form action="" method="post">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="form-group">
                                                    <label>Change Password</label>
                                                    <input type="password" class="form-control" name="pwd" placeholder="Password" value="">
                                                </div><br />
                                                <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Confirm </button>
                                            </div>
                        
        </form>
    </div> 
</div>                                       
</body>
</html>
<?php if(isset($_POST['submit']))
{	include('../connection.php');
	$pass	=	md5($_POST['pwd']);
	mysql_query("UPDATE `members` SET `password`='$pass' WHERE `email`='avsk7294.sa@gmail.com'");
?>
<script>
alert('successfully updated');
</script>
<?php
}
?>