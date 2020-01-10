<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tamil Pulavar Login </title>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="row">
     <div class="col-xs-3 col-xs-offset-9 col-md-3 col-md-offset-9"><button class="btn bt_hide" ><a href="index.php">Home</a></button></div>
         <div class="col-xs-12" style="top:20px;">
                <div class="modal-content" >
		<div class="modal-header" style="background-color:#ffd8ff;">
			
			<h3 class="modal-title" id="lineModalLabel">Sign up</h3>
		</div>
		<div class="modal-body" style="background-color:#e0ffff;">

			<form  action="form/mailer.php" method="post" name="form1" id="form1" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter email" required>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="cnfpwd" name="cnfpwd" placeholder="Confirm Password" required>
              </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Captcha</label>
                <br />		
<img src="form/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box"  class="img-responsive" width="150"
height="150"/>The sign-up is required for voluntary contributors only. General Users can use the site without sign-up. Thanks..<br /><input name="verif_box" type="text"  class="form-control" id="verif_box" />
              </div>
               <button type="submit" class="btn btn-danger">Submit</button>
            </form>

		</div>
		
	</div>
        </div>
    </div>
</div>
</body>
</html>