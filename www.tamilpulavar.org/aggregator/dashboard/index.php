<?php 
error_reporting(0);
ini_set('max_execution_time',0);
@session_start();
if($_SESSION['user_id'] == "")
{
	?>
	<script>
	window.location.href="../index.php";
	</script>
	<?php
}
$user_id = $_SESSION['user_id'];
$check = $user_id."finished";
include("../connection.php");
$results = mysql_query("SELECT `role` FROM `members` WHERE `user_id`='$user_id'");
$res_row = mysql_fetch_array($results);
$role = $res_row['role'];
$results1 = mysql_query("SELECT `role` FROM `role` WHERE `value`='$role'");
$res_row1 = mysql_fetch_array($results1);
$role_name = $res_row1['role'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a>-->
                    <a class="navbar-brand" href="#">
                       <?php echo $role_name; ?>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="user/logout.php" style="color:#fff; font-size:14px" >LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <?php
		if($role == 1)
		{ 
		?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="create_user.php"><i class="fa fa-table "></i>Create Users</a>
                    </li>
                    <li>
                        <a href="category.php"><i class="fa fa-edit "></i>Add Category</a>
                    </li>


                  <li>
                        <a href="sentance_keyword_admin.php"><i class="fa fa-qrcode "></i>Sentence Authorize</a>
                    </li>
                    
                    <li>
                        <a href="sentance_dashboard.php"><i class="fa fa-qrcode "></i>Category</a>
                    </li>
                     <li>
                        <a href="download.php"><i class="fa fa-bar-chart-o"></i>Download</a>
                    </li>

                   <!-- <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>-->
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2><?php echo $role_name; ?> DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                       <div class="alert alert-info alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Welcome!</strong>  <?php echo $role_name; ?>
                        </div>
                       
                       
                    </div>
                    </div>
                    
                     <?php
					date_default_timezone_set("Asia/Kolkata");
					$date = date('d-m-Y H:i:s');
					//echo $user_id;
					$query_linkid = mysql_query("SELECT `links_id` FROM `links`"); 
					$fetch_linkid = mysql_fetch_array($query_linkid);
					$count_site = mysql_num_rows($query_linkid);
					if($count_site == 0)
					{
						$count_site = 0;
					}
					$link_id = $fetch_linkid['links_id'];
					
					//echo $link_id;
					$query_sublinkcount = mysql_query("SELECT `sublink` FROM `sublinks` WHERE `mainlink_id` = $link_id AND `checked` = 1  ");
					$count_sublinks = mysql_num_rows($query_sublinkcount);
					if($count_sublinks == 0)
					{
						$count_sublinks = 0;
					}
					$query_sentence = mysql_query("SELECT `sentances` FROM `sentance`");
					$num_sentence = mysql_num_rows($query_sentence);
					if($num_sentence == 0)
					{
						$num_sentence = 0;
					}
					$results11 = mysql_query("SELECT * FROM `members` WHERE `role` != '1'");
					$count_mem = mysql_num_rows($results11);
					
					
					
					$results_finished = mysql_query("SELECT * FROM `sentance` WHERE `$check` = '1'");
					$count_finished = mysql_num_rows($results_finished);
					
					
					$result_user = mysql_query("SELECT * FROM `members` WHERE `sno` != '1'");
					 while($row_user = mysql_fetch_assoc($result_user))
					 {
					 $checked[] = $row_user['user_id']."finished";	 
					
					 }
					$results_finished_user = mysql_query("SELECT * FROM `sentance`WHERE " . implode( ' = 1 OR ', $checked ) ."");
					$count_finished_user = mysql_num_rows($results_finished_user);
					//echo "Links Processed:".$count_sublinks."<br>";
					//echo "Sentence Completed:".$num_sentence."<br>";
					
					?>
                    <div class="row">
                    
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-cog fa-3x"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $count_site; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    
                     
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Link processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-link fa-3x"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $count_sublinks; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                                         
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Sentence processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-spinner fa-3x fa-spin"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $num_sentence; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Users:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-users fa-3x"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $count_mem; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Sentence Authorized by user :
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-users fa-3x"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $count_finished_user; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Sentence Authorized by Admin:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-users fa-3x"></i></div>
                    <div class="col-sm-6">
					<p style="font-size:26px;"><?php echo $count_finished; ?></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    
                     
                    
                    </div>
                  <!-- /. ROW  --> 
                            <!--<div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>New Issues</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>-->
                 
                 
                 <?php } 
				else if($role == 2)
					{ 
				?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="sentance.php"><i class="fa fa-table "></i>Sentence Aggreagtion</a>
                    </li>
                  <!--  <li>
                        <a href="blank.php"><i class="fa fa-edit "></i>Blank Page</a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>-->
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2><?php echo $role_name; ?> DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Welcome!</strong>  <?php echo $role_name; ?>
                        </div>
                       
                       
                    </div>
                    </div>
                    <div class="row">
                    
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body"><?php echo $count_site; ?></div>
                    </div>
                    </div>
                    
                    
                     
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body"><?php echo $count_site; ?></div>
                    </div>
                    </div>
                    
                    
                     
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body"><?php echo $count_site; ?></div>
                    </div>
                    </div>
                    
                    
                     
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body"><?php echo $count_site; ?></div>
                    </div>
                    </div>
                    </div>
		
                  <!-- /. ROW  --> 
                            <!--<div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>New Issues</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>-->
                 
                 
                 <?php } 
					else
					{ 
					
					?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="sentance.php"><i class="fa fa-table "></i>Sentence Aggreagtion</a>
                    </li>
                  <li>
                        <a href="sentance_keyword.php"><i class="fa fa-edit "></i>Sentance Split</a>
                    </li>


                   <!--   <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>-->
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2><?php echo $role_name; ?> DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                       <div class="alert alert-info alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Welcome!</strong>  <?php echo $role_name; ?>
                        </div>
                       
                    </div>
                    </div>
                    
                    <?php
					
					date_default_timezone_set("Asia/Kolkata");
					$date = date('d-m-Y H:i:s');
					//echo $user_id;
					$query_linkid = mysql_query("SELECT `links_id` FROM `links` WHERE `user_id` = '$user_id'");
					$fetch_linkid = mysql_fetch_array($query_linkid);
					$count_site = mysql_num_rows($query_linkid);
					$link_id = $fetch_linkid['links_id'];
					
					//echo $link_id;
					$query_sublinkcount = mysql_query("SELECT `sublink` FROM `sublinks` WHERE `mainlink_id` = $link_id AND `checked` = 1 AND `user_id` = '$user_id' ");
					$count_sublinks = mysql_num_rows($query_sublinkcount);
					$query_sentence = mysql_query("SELECT `sentances` FROM `sentance`");
					$num_sentence = mysql_num_rows($query_sentence);
					
					//echo "Links Processed:".$count_sublinks."<br>";
					//echo "Sentence Completed:".$num_sentence."<br>";
					$results_finished = mysql_query("SELECT * FROM `sentance` WHERE `$check` = '1'");
					$count_finished = mysql_num_rows($results_finished);
					?>
                    <div class="row">
                    
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				No of Site Processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-cog fa-3x"></i></div>
                    <div class="col-sm-6">
                    <?php if($count_site != 0) 
					{?>
					<p style="font-size:26px;"><?php echo $count_site; ?></p>
                    <?php }
					else
					{ ?>
                    <p style="font-size:26px;">0</p>
                    <?php } ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    
                     
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Link processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-link fa-3x"></i></div>
                    <div class="col-sm-6">
                    <?php if($count_sublinks != 0) 
					{?>
					<p style="font-size:26px;"><?php echo $count_sublinks; ?></p>
                    <?php }
					else
					{ ?>
                    <p style="font-size:26px;">0</p>
                    <?php } ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                                         
                    
                    
                    
                    
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Sentence processed:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-spinner fa-3x fa-spin"></i></div>
                    <div class="col-sm-6">
                    <?php if($num_sentence != 0) 
					{?>
					<p style="font-size:26px;"><?php echo $num_sentence; ?></p>
                    <?php }
					else
					{ ?>
                    	<p style="font-size:26px;">0</p>
                        <?php } ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-4"> 
                    <div class="panel panel-success">
                    <div class="panel-heading">
    				Total no of Sentence Checked:
  					</div>
  					<div class="panel-body">
                    <div class="col-sm-6"><i class="fa fa-check-square-o fa-3x "></i></div>
                    <div class="col-sm-6">
                    <?php if($count_finished != 0) 
					{?>
					<p style="font-size:26px;"><?php echo $count_finished; ?></p>
                    <?php }
					else
					{ ?>
                    	<p style="font-size:26px;">0</p>
                        <?php } ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    </div>
                  <!-- /. ROW  --> 
                            <!--<div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>New Issues</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.php" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>-->
                 
                 
                 <?php } ?> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
              <div class="row">
                <div class="col-lg-12" >
                    &copy;  2016 Ultisoft | Design by: <a href="http://www.ultisoft.in" style="color:#fff;"  target="_blank">Ultimate Software Solutions</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
