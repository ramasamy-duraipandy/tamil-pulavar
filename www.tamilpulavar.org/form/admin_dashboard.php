<?php 
@session_start();
$_SESSION['dash'] = "loggedin";
if($_SESSION['id'] == "")
{
	header('location:permission.php');
}
include("../connection.php");
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
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<SCRIPT language="JavaScript" src="tamiltyping/layout.js"></SCRIPT>
<!--<SCRIPT language="JavaScript" src="menus.js"></SCRIPT>-->

<SCRIPT language=JavaScript src="tamiltyping/common.js"></SCRIPT>
<SCRIPT language=JavaScript src="tamiltyping/tamil.js"></SCRIPT>
<SCRIPT language=JavaScript>incfont("Code2000","CODETamil")</SCRIPT>



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
                    <a href="admin_dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
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
                        <p style="margin-top:18px;">Welcome, <?php echo $_SESSION['name']; ?></p>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       <!-- <li>
                           <a href="user.php">
                               Account
                            </a>
                        </li>-->
                        
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
            <div class="container-fluid">
                



                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">எதிர்ச்சொல்</h4><br>
                                <table class="table table-responsive table-bordered"><tr><td>Word</td><td>Antonym</td><td>Meaning</td><td>Delete</td></tr>
                             <?php  
                          		$result = mysql_query("SELECT * FROM `antonyms` WHERE `user_id`!='' AND `admin_checked` != '1'");
								while($row    = mysql_fetch_array($result))
								{ ?>
									<tr id="<?php echo $row['sno']; ?>"><td><?php echo $row['tword']; ?></td><td><?php echo $row['meaning'].$row['meaning_1']; ?></td>
                                    <td><?php echo $row['tword_meaning']; ?></td><td> 
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="tooltip"
                                     data-placement="left" title="Click to delete Category" onClick="call(<?php echo $row['sno']; ?>,'delete');">
                                     <i class=" fa fa-times-circle fa-2x"></i>
                  </button>    
                 					 <button type="button" class="btn btn-success btn-xs" data-toggle="tooltip"
                                     data-placement="left" title="checked" onClick="call(<?php echo $row['sno']; ?>,'update');">
                                     <i class="fa fa-check fa-2x"></i>
                 					 </button>    
                  </td></tr>
                                    
								<?php 
								}
                               	?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">பழமொழி</h4><br>
                                <table class="table table-responsive table-bordered"><tr><td>Proverb</td><td>Delete</td></tr>
                             <?php  
                          		$result = mysql_query("SELECT * FROM `proverbs` WHERE `user_id`!='' AND `admin_checked` != '1'");
								while($row    = mysql_fetch_array($result))
								{ ?>
									<tr id="prov_<?php echo $row['sno']; ?>"><td><?php echo $row['proverb']; ?></td><td> 
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="tooltip"
                                     data-placement="left" title="Click to delete Category" onClick="call_pala(<?php echo $row['sno']; ?>,'delete');">
                                     <i class=" fa fa-times-circle fa-2x"></i>
                  </button>    
                  <button type="button" class="btn btn-success btn-xs" data-toggle="tooltip"
                                     data-placement="left" title="Checked" onClick="call_pala(<?php echo $row['sno']; ?>,'update');">
                                     <i class="fa fa-check fa-2x"></i>
                  </button>    
                  </td></tr>
                                    
								<?php 
								}
                               	?>
                            </table>
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
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Category</h4>
        </div>
        <div class="modal-body" align="center">
          <input type="text" id="place_cat" value="" style="width:320px;">
          <input type="hidden" id="id_cat" value="">
          <input type="button" onClick="call_update();" value="Update" class="btn btn-danger">
         </div>
       
      </div>
      
    </div>
  </div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	
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
		

function call(id,process)
{
	var del_id = id;
	
	
	$.ajax
	({
		type: "POST",
		url: "category_delete.php",
		data: {info_id:del_id,process:process},
		success: function(data)
		{
			//alert(data);
		}
	});
	$("#"+id).animate({ backgroundColor: "#fbc7c7" }, "fast")
	.animate({ opacity: "hide" }, "slow");
	
	
	return false;
	
}
function call_pala(id,process)
{
	var del_id = id;
	$.ajax
	({
		type: "POST",
		url: "proverb_delete.php",
		data: {info_id:del_id,process:process},
		success: function(data)
		{
			//alert(data);
		}
	});
	$("#prov_"+id).animate({ backgroundColor: "#fbc7c7" }, "fast")
	.animate({ opacity: "hide" }, "slow");
	
	
	return false;

}

</script>

</html>
