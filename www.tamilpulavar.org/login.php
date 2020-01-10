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
         <div class=" col-xs-12" style="top:60px;">
                <div class="modal-content">
		<div class="modal-header" style="background-color:#f8885e;">
				
			<h3 class="modal-title " id="lineModalLabel">Login</h3>
		</div>
		<div class="modal-body" style="background-color:#d8ffff;">

			<form action="form/login.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
              </div>
              
              <button type="submit" class="btn btn-success ">Submit</button>
            </form>

		</div>
		
	</div>
        </div>
    </div>
</div>

</body>
</html>