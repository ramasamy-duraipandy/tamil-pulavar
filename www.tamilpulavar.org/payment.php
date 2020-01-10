<form action="" name="pay" method="post">
<div class="form-group col-md-6">
<label for="name">Name:</label>
<input type="text" name="name" class="form-control" value="" id="name" placeholder="Enter Your Name" />
</div>
<div class="form-group col-md-6">
<label for="address">Address:</label>
<input type="text" name="addr" class="form-control" value="" id="addr" placeholder="Enter Your Address" />
</div>
<div class="form-group col-md-6">
<label for="mobile">Mobile no:</label>
<input type="tel"  name="cntct" class="form-control" value="" id="cntct" placeholder="Enter Your mobilenumber" required="required"/>
</div>
<div class="form-group col-md-6">
<label for="email">email:</label>
<input type="email" name="email" class="form-control" value=""  id="email" placeholder="Enter Your Email" required="required"/> 
</div> 
<div class="form-group">
<label for="amount">Amount:</label>
<input type="text" name="amount" class="form-control" value=""  id="amount" placeholder="Enter the amount" required="required"/> 
</div> 
<div class="form-group col-md-5">
<a class="btn btn-danger" href="donors.php" target="_blank">Donar List</a>
</div>
<div class="form-group col-md-7">
<input type="submit" class="btn btn-success" name="submit" value="submit"/>
</div><br />
</form>
<?php
if(isset($_POST['submit']))
{
$nam 	 =	$_POST['name'];
$addr	=	$_POST['addr'];
$mob	 =	$_POST['cntct'];
$e_id	=	$_POST['email'];
mysql_query("INSERT INTO 'payment' (`sno`,`name`,`address`,`contact_no`,`amount`,`email`) values ('$nam','$addr','$mob','$e_id')") or die(mysql_error());
}
?>