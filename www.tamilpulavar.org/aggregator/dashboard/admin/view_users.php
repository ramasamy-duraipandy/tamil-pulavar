<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <style>
   table {
    table-layout:fixed;
}

.div-table-content {
  height:250px;
  overflow-y:auto;
}
   </style>

<script type="text/javascript" >
function call(id)
{
//	alert(id);
var del_id = id;
//alert(del_id);
var info = 'id='+del_id;

if(confirm("Sure you want to delete this user? There is NO undo!"))
{
$.ajax({
type: "POST",
url: "admin/delete.php",
data: info,
success: function(data){
	alert(data);
}
});
$("#"+id).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
.animate({ opacity: "hide" }, "slow");
}
return false;

}
</script>


</head>

</head>
<body>
<div id="wrapper">
<div class="row">





 <div class="panel panel-default">
    <table class="table table-striped" >
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>User Id</th>
                <th>Role</th>
                <th>Delete</th>
                
            </tr>
        </thead>
    </table>

<div class="div-table-content">
    <table class="table table-striped">
        <tbody>
        <?php
include("../../connection.php");
$results11 = mysql_query("SELECT * FROM `members` WHERE `role` != '1'");
while($row_mem = mysql_fetch_assoc($results11))
{
	$user = $row_mem['user_name'];
	$password = $row_mem['password'];
	$user_id = $row_mem['user_id'];
	$role = $row_mem['role'];
	$results = mysql_query("SELECT `role` FROM `role` WHERE `value` = '$role'");
	
?>
            <tr class="record">
                <td><?php echo $user; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $user_id; ?></td>
                <td><?php echo $role; ?></td>
                <td><button type="button" class="btn btn-danger delbutton" onClick="call(id);" id="<?php echo $user_id; ?>">Delete</button></td>
            </tr>   
<?php } ?>
			
           
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</body>
</html>