<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="form/assets/img/ico.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(function(){
$("#Menu_content").removeAttr("align");
});
</script>
</head>
<body>
<div class="container">
<div class="page-header">

    <div class="row">

        <div class="col-md-6">

        <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil Small.png" class="pull-left" /></a>

        </div>

        <div class="col-md-6">

        <!--<img src="img/uss_logo .png" class="pull-right" />-->

        </div>

     </div>

</div>

	<div class="row">

    	<div class="col-md-10 col-md-offset-1 col-xs-12">

		<h3>Form</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table class="table table-responsive table-striped">

<tr><td>Name :</td><td><input type="text" name="name" class="form-group" value="" required="required"  /></td></tr>

<tr><td>Email :</td><td><input type="email" name="email" class="form-group" value="" required="required"  /></td></tr>

<tr><td>Select Category:</td><td><select name="category" class="form-group">
<option value="common">Common</option>
<option value="suggest">Suggest</option>
<option value="Comment">Comment</option></select></td></tr>

<tr><td>message :</td><td><textarea  name="message"  class="converters form-group typeahead tt-query" id="cnt" charset="utf-8" autocomplete="off" spellcheck="false" onKeyPress="javascript:convertThis(event)" cols="30" rows="10"></textarea>
<div  id="type"></div></td></tr>
<tr><td></td><td><input type="submit" class="btn btn-success" name="submit" value="Submit"  /></td></tr>

</table>

</form>
		</div>

	</div>





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
	<SCRIPT language="JavaScript" src="form/tamiltyping/layout1.js"></SCRIPT>
    <SCRIPT language="JavaScript" src="form/tamiltyping/menus.js"></SCRIPT>
    <SCRIPT language=JavaScript src="form/tamiltyping/common.js"></SCRIPT>
    <SCRIPT language=JavaScript src="form/tamiltyping/tamil.js"></SCRIPT>
    
	<script language="javascript">
	SelectedTab=2;
	SelectedMenu =2;
	showTab();
	document.getElementById('type').appendChild(
    document.getElementById('WholePage')
  );
  </script>



</body>

</html>
<?php
if(isset($_POST['submit']))
{
	include('connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$category = $_POST['category'];
	$message = $_POST['message'];
	$name = stripslashes($name); 
	$headers = 'From:'.$email."\r\n" .'Reply-To:'.$email . "\r\n".'X-Mailer: PHP/'.phpversion();
	$from = stripslashes($email); 
	$subject = "Reg $category";
	$message = "Hi ".$name."\n".$message;
	if(mail("admin@tamilpulavar.org", 'Online Form: '.$subject, $message, $headers))
        echo '<script>alert("Sent successfully");</script>';
        else
        echo '<script>alert("Mail not sent");</script>';
	
	 
	?>
    <script>
	//alert("Your message has been submitted successfully");
	window.location.href="contact.php";
	</script>
    <?php
}
?>	
