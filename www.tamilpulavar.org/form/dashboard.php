<?php 
error_reporting(0);
@session_start();
$_SESSION['dash'] = "loggedin";
$tmp_word		 =  $_SESSION['tmpwrd'];
if($_SESSION['id'] == "")
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
	<title>Dashboard</title>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
              
                    <img src="../img/Tamil Pulavar - Logo Tamil Small_edited.png" class="img-responsive">
               
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li>
                        <p style="margin-top:18px;">வணக்கம், <?php echo $_SESSION['name']; ?></p>
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


        <div class="content">
        <div id="type">
    	</div>
            <div class="container-fluid">
                



                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">சொல் தருக</h4><br>
                              <div class="form-group">
                            <label for="wrd">Word</label>
                            <?php
							if($tmp_word !="")
							{
							?>
                            <input type="text" class="form-control converters" id="wrd" placeholder="Enter the word" name="word" charset="utf-8" onKeyPress="javascript:convertThis(event)" value="<?php echo $tmp_word; ?>" onKeyDown="toggleKBMode(event)">
                            <?php
							}
							else
							{
						   ?>
							<input type="text" class="form-control converters" id="wrd" placeholder="Enter the word" name="word" charset="utf-8" onKeyPress="javascript:convertThis(event)" onKeyDown="toggleKBMode(event)">
                            <?php
							}
							?>
                          </div>
                          <div class="form-group">
                            <label for="mean">Antonym</label>
                            <input type="text" class="form-control converters" id="anton" placeholder="antonyms" name="ant_tword"  charset="utf-8" onKeyPress="javascript:convertThis(event)"   onKeyDown="toggleKBMode(event)" >
                          </div>
                           <div class="form-group">
                            <label for="mean">Meaning</label>
                            <input type="text" class="form-control converters" id="mean" placeholder="meanings" name="tword"  charset="utf-8" onKeyPress="javascript:convertThis(event)"   onKeyDown="toggleKBMode(event)" >
                          </div>
                          <button type="submit" onClick="insert();" id="sbmit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">பழமொழி தருக</h4><br>
                              <div class="form-group">
                            <label for="wrd">Word</label>
                            <input type="text" class="form-control converters" id="pala_wrd" placeholder="Enter the word" name="word" charset="utf-8" onKeyPress="javascript:convertThis(event)" onKeyDown="toggleKBMode(event)">
                          </div>
                          
                           
                          <button type="submit" onClick="insert_palamoli();" id="sbmit" class="btn btn-default">Submit</button>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Tamilpulavar Dashboard</b> ."

            },{
                type: 'info',
                timer: 4000
            });
			
		});
		function insert_palamoli()
		{
			//alert("hai");	
			var pala_wrd = $("#pala_wrd").val();
			
			$.ajax({
				url:"proverbs.php",
				data:{pala_wrd:pala_wrd},
				type:"POST",
				success: function(data)
				{
					alert(data);
					location.reload();
				}
				});
    	}
		function insert()
			{
			//alert("hai");	
			var wrd = $("#wrd").val();
			var anton = $("#anton").val();
			var mean = $("#mean").val();
			$.ajax({
				url:"antonym.php",
				data:{wrd:wrd,mean:mean,anton:anton},
				type:"POST",
				success: function(data)
				{
					alert(data);
					location.reload();
					<?php unset($_SESSION['tmpwrd']);?>
				}
				});
    	}
	</script>
    <SCRIPT language="JavaScript" src="tamiltyping/layout1.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="tamiltyping/menus.js"></SCRIPT>
    <SCRIPT language=JavaScript src="tamiltyping/common.js"></SCRIPT>
    <SCRIPT language=JavaScript src="tamiltyping/tamil.js"></SCRIPT>
    <SCRIPT language=JavaScript src="tamiltyping/english.js"></SCRIPT>
	<script language="javascript">
	SelectedTab=2;
	SelectedMenu =2;
	showTab();
	document.getElementById('type').appendChild(
    document.getElementById('WholePage')
  );
  </script>

</html>
