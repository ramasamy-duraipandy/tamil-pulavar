<?php 
@session_start();
$_SESSION['dash'] = "loggedin";
if($_SESSION['id']=="")
{
	header('location:permission.php');
}
error_reporting(0);
include('assets/config.php');    //include of db config file
include ('paginate.php'); //include of paginat page

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/ico.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> Antonyms List</title>

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
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li  class="active">
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
                    <a class="navbar-brand" href="dashboard.php">Word List</a>
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
            $id = $_SESSION['id'];
            $per_page = 10;         // number of results to show per page
            $result = mysql_query("SELECT * FROM `antonyms` WHERE `user_id` = '$id'");
            $total_results = mysql_num_rows($result);
            $total_pages = ceil($total_results / $per_page);//total pages we going to have
            
            //-------------if page is setcheck------------------//
            if (isset($_GET['page'])) {
                $show_page = $_GET['page'];             //it will telles the current page
                if ($show_page > 0 && $show_page <= $total_pages) {
                    $start = ($show_page - 1) * $per_page;
                    $end = $start + $per_page;
                } else {
                    // error - show first set of results
                    $start = 0;              
                    $end = $per_page;
                }
            } else {
                // if page isn't set, show first set of results
                $start = 0;
                $end = $per_page;
            }
            // display pagination
            $page = intval($_GET['page']);
            
            $tpages=$total_pages;
            if ($page <= 0)
                $page = 1;
            ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Word List</h4> </div>
                            <div class="content table-responsive table-full-width">
                                <?php
                   
                    // display data in table
                    echo "<table class='table table-bordered'>";
                    echo "<thead><tr><td>Word</td> <td>Antonym</td><td>meaning</td></tr></thead>";
                    // loop through results of database query, displaying them in the table 
                    for ($i = $start; $i < $end; $i++) {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) {
                            break;
                        }
                      
                        // echo out the contents of each row into a table
                        echo "<tr " . $cls . ">";
                        echo '<td>' . mysql_result($result, $i, 'tword') . '</td>';
                        echo '<td>' . mysql_result($result, $i, 'meaning') . '</td>';
						 echo '<td>' . mysql_result($result, $i, 'tword_meaning') . '</td>';
                        echo "</tr>";
                    }       
                    // close table>
                echo "</table>";
            // pagination
			 $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div class="container">
						<ul class="pagination">';
                    if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
            ?>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>
        
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Word List</h4> </div>
                            <div class="content table-responsive table-full-width">
                                <?php
                    			 echo "<table class='table table-bordered'>";
                   				 echo "<tr><td>Proverbs</td></tr>";
								 $res_prov = mysql_query("SELECT * FROM `proverbs` WHERE `user_id` = '$id'");
								 while($row_prov = mysql_fetch_array($res_prov))
								 {
									echo "<tr><td>".$row_prov['proverb']."</td></tr>"; 
								 }
								 echo "</table>";
                   				?>
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


</html>
