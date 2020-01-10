<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Dictionary</title>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>

<body>
<?php
include("connection.php");
$dict_name = $_GET['dict'];
$result_about = mysql_query("SELECT `detail`,`full_name` from `table_name` WHERE `table_name`='$dict_name'");
$row_about = mysql_fetch_array($result_about);
$detail = $row_about['detail'];
$full_name = $row_about['full_name'];
$findme = "htt";
$pos = strpos($detail, $findme);
if ($pos !== false) 
{
	header("Location:$detail");
}
else
{ ?>

<div class="container">
<div class="page-header">

    <div class="row">

        <div class="col-md-6">

        <img src="images/Tamil Pulavar - Logo Tamil Small.png" class="pull-left" />

        </div>

        <div class="col-md-6">

        <!--<img src="img/uss_logo .png" class="pull-right" />-->

        </div>

     </div>

</div>
	<div class="row">
    	<div class="col-md-6 col-md-offset-3">
        <br /><br />
        <table class="table table-responsive table-bordered">
            <tr class="success"><td><?php  echo $full_name; ?></td></tr>
            <tr><td><?php  echo html_entity_decode($detail); ?></td></tr>
         </table>      
        </div>
    </div>
    <footer>

   <div class="row" style="font-family:Verdana, Geneva, sans-serif;">

<hr />
          <div class="col-md-4" >
         	                  <h4 style="color:#F00;">Contact</h4>
                                    <p >Ultimate Software Solutions,<br />
                                    H/68,First floor,Haravi Street,<br>
                                    6th cross,R.M colony,<br>
                                    Dindigul-624001,<br />
                                    Tamil Nadu,India.</p>
                                   
                      
                    </div>

                   <div class="col-md-4" style="margin-top:38px;">

                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">(CC BY-NC-SA 4.0)</a></p>

                   </div>  			

				  <div class="col-md-4"  style="margin-top:38px; font-family:Verdana, Geneva, sans-serif;">

          
			 <p  class="pull-right">Phone : +91 - 8883238222,+91 -8015899585,+91 -8675676258<br>
                                    Email&nbsp;&nbsp;: contact@tamilpulavar.org</p>
                             

          </div>

                </div>

      


	</footer>
</div>
<?php
}
?>

</body>
</html>