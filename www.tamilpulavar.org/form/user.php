<?php 
@session_start();
$_SESSION['dash'] = "loggedin";
if($_SESSION['id']=="")
{
	header('location:permission.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/ico.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
              
                    <img src="../img/Tamil Pulavar - Logo Tamil Small_edited.png" class="img-responsive">
               
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Word List</p>
                    </a>
                </li>
                 <li>
                    <a href="../index.php">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                 <li>
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
                
                
                
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li>
                         <p style="margin-top:18px;">Welcome, <?php echo $_SESSION['name']; ?></p>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="user.php">
                               Account
                            </a>
                        </li>
                        
                        <li>
                            <a href="logout.php">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<?php
include('../connection.php');
$no = $_SESSION['id'];
$result = mysql_query("SELECT `email`,`name` FROM `members` WHERE `sno`='$no'");
$row = mysql_fetch_array($result);
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="hidden" name="sno" value="<?php echo $no; ?>">
                                                <input type="text" class="form-control" placeholder="Username" name="name" value="<?php echo $row['name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row['email']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Change Password</label>
                                                <input type="password" class="form-control" name="pwd" placeholder="Password" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control"  name="cnfpwd" placeholder="Confirm password" value="">
                                            </div>
                                        </div>
                                    </div>

                                     <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="content">
                            <div class="row">
                            <div class="col-md-6">
                            <?php
							$u_id	=	$_SESSION['id'];
							$num	 =	mysql_query("SELECT COUNT(*) FROM `antonyms` WHERE `user_id` = '$u_id'");
							$ct	  =	mysql_fetch_array($num);
							?>
                            <h3>TOTAL WORDS PROVIDED BY YOU : <?php echo $ct['COUNT(*)']; ?></h3>
                            </div>
                            <div class="col-md-6">
                            <?php
							mysql_query("SET @rank := 0") or die(mysql_error());
							//$qry_rnk = mysql_query("SELECT @rank := @rank+1 AS `rank`, `user_id`, `total_words` FROM `rank_list` WHERE `user_id` = '$u_id' ORDER BY `total_words` DESC ") or die(mysql_error());
							mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `ranks` AS (SELECT @rank := @rank+1 AS `rank`, `user_id`, `total_words` FROM `rank_list` ORDER BY `total_words` DESC)")or die(mysql_error());
							$qry_rnk 	  =  mysql_query("SELECT * FROM `ranks` WHERE `user_id` = '$u_id'")or die(mysql_error());
							$qry_fetch	= mysql_fetch_array($qry_rnk);
							$rank		 = $qry_fetch['rank'];
							?>
                            <h3>RANK : <?php echo $rank; ?></h3>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                	<?php
									$qry	  =	mysql_query("SELECT `image` FROM `members` WHERE `sno` = '$u_id'") or die(mysql_error());
									$fet_qry  =	mysql_fetch_array($qry);
									$u_img	=	$fet_qry['image'];
									if($u_img != "") 
									{
									?>
                                    <img class="avatar border-gray" src="uploads/<?php echo $u_img; ?>" alt="..."/>
                                    <?php
									}
									else
									{?>
                                    <img class="avatar border-gray" src="uploads/SdOkx9w.png" alt="..."/>
                                    <?php }?>
                                    <span style="cursor:pointer"><i class="fa fa-camera" aria-hidden="true" id="cam"></i></span>
                                    <div class="well" id="imgcnt" style="display:none" >
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="file" name="img" id="img">
                                        <input type="submit" value="Upload Image" name="upload">
                                    </form>
                                     </div>
									<h4 class="title"><?php echo $row['name']; ?><br />
                                        
                                      </h4>
                                    </a>
                                </div>
                                                            </div>
                            <hr>
                            <div class="text-center">
                                Welcome!

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.tamilpulavar.org">Tamil Pulavar</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    <script>
	$(function(){
		$("#cam").click(function()
		{
			$("#imgcnt").toggle();
		});
		});
	</script>

</html>
<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES['img']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["upload"]))
 {
	$check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) 
	{
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
	else
	{
        echo "File is not an image.";
        $uploadOk = 0;
    }
	if ($_FILES["img"]["size"] > 1000000) 
	{
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	} 
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) 
	{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	} 
	if ($uploadOk == 0) 
	{
    	echo "Sorry, your file was not uploaded.";
	} 
	else 
	{
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
		 {
			echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
			$name	=	basename( $_FILES["img"]["name"]);
			mysql_query("UPDATE `members` SET `image` = '$name' WHERE `sno` = '$u_id'")or die(mysql_error());
		 } 
		else
		 {
			echo "Sorry, there was an error uploading your file.";
		 }
	}
 }
if(isset($_POST['submit']))
{
	$pwd = $_POST['pwd'];
	$sno = $_POST['sno'];
	$cnfpwd = $_POST['cnfpwd'];
	if($pwd == $cnfpwd)
	{
		$password = md5($pwd);
		mysql_query("UPDATE `members` SET `password`='$password' WHERE `sno`='$sno'");
		echo "<script>alert('Your Password has been Changed');</script>";
	}
}
?>