<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Content Contributors</title>
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
           <!-- <img src="img/uss_logo .png" class="pull-right" />-->
            </div>
         </div>
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
        <h3 class="text-center text-success" style="font-family:Verdana, Geneva, sans-serif;">Content Contributors</h3><br />
       		<div class="table-responsive">
                <table class="table table-striped text-center">
                <tr class="text-danger h4"><td>NAME</td><td>TOTAL WORDS</td><td>RANK</td></tr>
                    <?php
                    include("connection.php");
                    mysql_query("SET @rank := 0") or die(mysql_error());
                    $qry		  =	mysql_query("SELECT @rank := @rank+1 AS `rank`, `user_id`, `total_words` FROM `rank_list` ORDER BY `total_words` DESC");
                    while($qry_fetch   =	mysql_fetch_array($qry))
                    {
                        $rank		  =	$qry_fetch['rank'];
                        $u_id    	  =	$qry_fetch['user_id'];
                        $qry1	 	  =	mysql_query("SELECT `name` FROM `members` WHERE `sno` = '$u_id'");
                        $qry1_fetch	=	mysql_fetch_array($qry1);
                        $name 		  =	$qry1_fetch['name'];
                        $total  		 =	$qry_fetch['total_words'];
                        ?>
                        <tr><td><?php echo $name;?></td><td><?php echo $total;?></td><td ><?php echo $rank;?></td></tr>
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