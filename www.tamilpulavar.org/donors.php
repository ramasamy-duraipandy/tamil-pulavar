<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tamilpulavar - Donor's List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6">
            <a href="index.php"><img src="images/Tamil Pulavar - Logo Tamil Small.png" class="pull-left" /></a>
            </div>
            <div class="col-md-6">
            <img src="img/uss_logo .png" class="pull-right" />
            </div>
         </div>
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
        <h3 class="text-center text-success" style="font-family:Verdana, Geneva, sans-serif;">Donor List</h3>
        	<h4 class="text-center text-warning">தந்தமைக்கு நன்றி</h4><br />
       		<div class="table-responsive">
                <table class="table table-striped text-center">
                <tr class="text-danger h4"><td>NAME</td><td>Amount</td><td></td></tr>
                    <?php
                    include("connection.php");
                    $qry		  =	mysql_query("SELECT * FROM `donors` ORDER BY `sno` DESC");
                    while($qry_fetch   =	mysql_fetch_array($qry))
                    {
                        $name		  =	$qry_fetch['name'];
                        $amount    	=	$qry_fetch['amount'];
                        ?>
                        <tr><td><?php echo "திருமிகு. <b class='h4'>".$name."</b>";?></td><td><?php echo $amount;?></td><td></td></tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
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

</body>
</html>