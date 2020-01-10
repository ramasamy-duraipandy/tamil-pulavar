<?php
include("connection.php");
$sq	   =	mysql_query("SELECT `api_hits` FROM `api_hits` WHERE `sno` = 1") or die(mysql_error());
$ft_sq	=	mysql_fetch_array($sq);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Api Info - Tamilpulavar</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>
<div class="container">
<div class="page-header">

    <div class="row">

        <div class="col-md-6">

        <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil Small.png" class="pull-left" /></a>

        </div>

        <div class="col-md-6">
			
            <h5 class="text-primary" style="line-height:30px;">தமிழ்கூறு நல்லுலகிற்கு 2017 ஆம் வருடப் புத்தாண்டுப் பரிசாக இதை வழங்குகிறோம்</h5>

       <!-- <img src="img/uss_logo .png" class="pull-right" />-->

        </div>

     </div>

</div>

	<div class="w3-container">
  <h2>Api Example</h2>

  <div class="w3-card-4 ">
    <header class="w3-container w3-light-grey">
      <h3 class="well">Link : http://www.tamilpulavar.org/getdata.php?wrd=<b class="text-success">'your search word'</b>& dict=<b class="text-success">'Dictionary Type' </b></h3><br />
      <h3>For Tamil-Tamil Dictionaries:</h3>
      <h4 class="well">Example  http://www.tamilpulavar.org/getdata.php?wrd=<b class="text-danger">சொல்</b>&dict=<b class="text-danger">tamil-tamil</b> </h4>
      <h3>For English-Tamil Dictionaries:</h3>
      <h4 class="well">Example : http://www.tamilpulavar.org/getdata.php?wrd=<b class="text-danger">cell</b>&dict=<b class="text-danger">english-tamil </b></h4>
      <h4 >For செம்மொழி தொகுப்பு:</h4>
      <h4 class="well">Example : http://www.tamilpulavar.org/getdata.php?wrd=<b class="text-danger">சொல்</b>&dict=<b class="text-danger">செம்மொழி </b></h4>
    </header>
    <div class="w3-container">
      <p></p>
      <hr><?php $string = '<iframe src=" http://www.tamilpulavar.org/getdata.php?wrd=(your search word)&dict=(Dictionary Type)" width="100%" height="50%"></iframe>'; ?> 
      <h3>You can recieve it through iframe</h3>
      <p><textarea  class="form-control" readonly="readonly" id="message"><?php echo $string; ?></textarea></p><br>
    </div>
    <button class="w3-btn-block w3-dark-grey"  onclick="copyToClipboard('message')">+ Copy</button>
  </div>
</div>

<script>
function copyToClipboard(elementId) {
  alert("Text Copied!!");
  $("#message").addClass('alert-success');
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(elementId).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");

  document.body.removeChild(aux);

}
</script>


<footer>

   <div class="row" style="font-family:Verdana, Geneva, sans-serif;">

<hr />
          <div class="col-md-4" >
         	                  <h4 style="color:#F00;">Contact</h4>
                                    <p >M2/179,<br /> 12th Cross Rd,<br /> RM Colony, Dindigul,<br /> Tamil Nadu 624001</p>
                                   
                      
                    </div>

                   <div class="col-md-4" style="margin-top:38px;">

                   <p class="text-center">This page is available under the <br><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">(CC BY-NC-SA 4.0)</a></p>

                   </div>  			

				  <div class="col-md-4"  style="margin-top:38px; font-family:Verdana, Geneva, sans-serif;">

          
			<p  class="pull-right">Phone : +91 - 8883238222,+91 -8015899585,+91 -8675676258, +91-81224 52237 <br />
                                    Email&nbsp;&nbsp;: contact@tamilpulavar.org</p>
                             

          </div>

                </div>

      


	</footer>
</div>
	
<div style="display:none"><?php echo $ft_sq['api_hits']; ?></div>


</body>

</html>

