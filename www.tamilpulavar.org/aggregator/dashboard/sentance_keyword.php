<?php 
//error_reporting(0);
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
    <title>Keyword Category</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
  .btn span.glyphicon {    			
	opacity: 0;				
}
.btn.active span.glyphicon {				
	opacity: 1;				
}
   </style>
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="sentance.php"><i class="fa fa-table "></i>Sentence Aggreagtion</a>
                    </li>
                    <li class="active-link">
                        <a href="sentance_keyword.php"><i class="fa fa-edit "></i>Sentence Split</a>
                    </li>

                   <!-- <li>
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
        <form action="" method="post">
            <div id="page-inner">
                
                     <h2>Sentence</h2>
                     
                     <?php
					 $v=0;
					 $result_sentance = mysql_query("SELECT * FROM `sentance` WHERE `$check`!='1' AND `ID1finished`!= '1' LIMIT 10");
					 while($row_sentance = mysql_fetch_assoc($result_sentance))
					 {
					 $sentances[$v] = $row_sentance['sentances'];	 
					 $sno[$v] = $row_sentance['sno'];	
					 $sublink_id[$v] = $row_sentance['link_id'];
					 $v++;
					 } ?>
					
   <?php 
   					 $i=0;
   					 $result_category = mysql_query("SELECT * FROM `category`");
					 while($row_category = mysql_fetch_assoc($result_category))
					 {
					 $id[$i] = $row_category['id'];
					 $category[$i] = $row_category['category'];	 
					 $i++; 
					 }
					 ?>	 
        			
                      
                         <?php for($k=0;$k<$v;$k++)
						 {
							// echo $sublink_id[$k];
							 $sublink_result = mysql_query("SELECT `sublink` FROM `sublinks` WHERE `sublink_id`='$sublink_id[$k]'");
							 $row_sublink = mysql_fetch_array($sublink_result);
							 $sublink_name[$k] = $row_sublink['sublink']; 
							 ?>
                            <div class="row">
                            <div class="col-lg-12">
                            <div class="col-lg-6">
                            <?php echo $sublink_name[$k]; ?><br>
                            <?php echo $sentances[$k]; ?>
                            </div>
                            <div class="col-lg-6"><br>
                            <input type="hidden" value="<?php echo $sno[$k]; ?>" name="sno<?php echo $k; ?>">
                            <div class="btn-group" data-toggle="buttons">
                            <?php for($m=0;$m<$i;$m++)
                            { ?>
                            <label class="btn btn-success "><?php echo $category[$m]; ?>
                                <input type="checkbox" autocomplete="off" name="check<?php echo $k.$m; ?>" value="<?php
								 echo $category[$m]; ?>" >
                                <span class="glyphicon glyphicon-ok"></span>
                            </label>
                            <?php } ?>
                            </div>
                            </div>
                            </div>					
                         </div>
                         <hr>
                         <?php } ?>
                          <input type="hidden" name="sentance_count" value="<?php echo $k; ?>">
                         <input type="hidden" name="category_count" value="<?php echo $m; ?>">
                         <input type="submit" name="enter" value="next" >
                         </div>                    
                     
                     </form>
              
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
              <div class="row">
                <div class="col-lg-10" >
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
<?php if(isset($_POST['enter']))
{
$category_count = $_POST['category_count'];
$i=0;
while($i < 10)
{
	 $sentance_sno[$i] = $_POST["sno$i"];
	//$sentance_sno_ar[]=$sentance_sno[$i];
	//echo $sentance_sno[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	$p = 0;
	mysql_query("INSERT INTO `for_admin`(`sno`, `sentance_no`, `users`, `Tamil`, `English`) VALUES 			   ('NULL','$sentance_sno[$i]','$user_id','0','0')");
	while($p < $category_count)
	{
		
		 $cat[$i][$p] = $_POST["check$i$p"];
		//$cat_ar[][] =  $cat[$i][$p];
		 $val = $cat[$i][$p] ;
		 mysql_query("UPDATE `for_admin` SET `$val` = '1' WHERE `sentance_no`='$sentance_sno[$i]' AND `users`= '$user_id'");
		 $p++;
	}
	
	mysql_query("UPDATE `sentance` SET `$check`= '1' WHERE `sno`='$sentance_sno[$i]'");
	//echo "<br>";
	

$i++;
}
?>
<script>
    window.location.href="sentance_keyword.php";
</script>

<?php
}
?>