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
   
<script type="text/javascript" >
function call(id)
{
//	alert(id);
var del_id = id;
//alert(del_id);
var info = 'id='+del_id;


$.ajax({
type: "POST",
url: "admin/category_delete.php",
data: info,
success: function(data){
	//alert(data);
}
});
$("#"+id).animate({ backgroundColor: "#fbc7c7" }, "fast")
.animate({ opacity: "hide" }, "slow");


return false;

}
function call_pop(id)
{
	var category_id = id;
	var info = 'id='+category_id;
	$.ajax({
		type: "POST",
		url: "admin/category_retrive.php",
		data: info,
		success: function(data){
		//	alert(data);
		$("#place_cat").val(data);
		$("#id_cat").val(category_id);
		}
		});
		
    $("#myModal").modal();
}
function call_update()
{
	var retr = $("#place_cat").val();
	var cats_id = $("#id_cat").val();
	$.ajax({
		type: "POST",
		url: "admin/category_update.php",
		data: {"info":retr,"cats_id":cats_id},
		success: function(data){
		alert(data);
		location.reload();
		}
		});
		
}
</script>
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
                        <a href="create_user.php"><i class="fa fa-table "></i>Create Users</a>
                    </li>
                    <li  class="active-link">
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
                    <div class="col-md-12">
                     <h2>Add Categories For Sentance</h2>
            <div class="col-lg-6 col-lg-offset-3" style="margin-top:35px;">  
            <form action="" method="post">       
        	<div class="form-group">
   			 <label for="exampleInputPassword1">Category Name:</label>
    			<input type="text" class="form-control" id="exampleInputPassword1" name="category" placeholder="Enter A Category Name">
 			 </div>
             <button type="submit" name="enter" class="btn btn-default">Enter</button>
              </form>
             </div>
            
				
                
                
                
                     
                     
                        
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <div class="row">
               <div class="col-lg-6 col-lg-offset-3">              
                <ul class="list-group">
                <li class="list-group-item active"><b>Category List</b></li>
                <?php 
			  $res_category = mysql_query("SELECT * FROM `category`");
			  while($row_cat =  mysql_fetch_assoc($res_category))
			  {
				  $category_name = $row_cat['category'];
				  $category_id = $row_cat['id'];
				  ?>
                  <li class="list-group-item" id="<?php echo $category_id; ?>"><?php echo $category_name; ?>
                  <button type="button" class="glyphicon glyphicon-remove pull-right btn btn-danger" data-toggle="tooltip" data-placement="left" title="Click to delete Category" onClick="call(<?php echo $category_id; ?>);">
                  </button>    
                  <button type="button" class="glyphicon glyphicon-pencil pull-right btn btn-success" onClick="call_pop(<?php echo $category_id; ?>);">
                  </button></li>
                  <?php
			  }
			  ?>       
               </ul>      
                     </div>
              </div>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
    <!-- Modal -->
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
<?php 
if(isset($_POST['enter']))
{

	$category = $_POST['category'];
	mysql_query("INSERT INTO `category`(`id`, `category`) VALUES ('NULL','$category')");
	mysql_query("ALTER TABLE `for_admin` ADD `$category` VARCHAR( 255 ) NOT NULL");
?>
<script>
alert("Successfully Inserted");
window.location.href="category.php";
</script>
<?php 
}
?>