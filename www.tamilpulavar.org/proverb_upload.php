<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<br /><br /><br />
<div class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="" method="post" >
                <div class="form-group">
                	<label for="inputEmail3" class="col-sm-2 control-label">Proverbs</label>
                	<div class="col-sm-10">
                		<textarea class="form-control" rows="3" name="proverbs"></textarea>
                	</div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    	<button type="submit" name="submit" class="btn btn-default">submit</button>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>

<?php
if(isset($_POST['submit']))
{
	include("yapp/transliterate.php");
	include("connection.php");
	$prov  = $_POST['proverbs'];
	$input = explode("\n", $prov);
	foreach($input as $line)
	{
		if($line != "")
		{
			$tran_line  = 	T2R($line);
			$resOpro	=	mysql_query("SELECT * FROM `proverbs` WHERE `proverb` = '$line'")or die(mysql_error());
			if(mysql_num_rows($resOpro))
			{
			}
			else
			{
				mysql_query("INSERT INTO `proverbs`(`sno`, `proverb`, `user_id`, `admin_checked`, `literate`) VALUES
				('NULL','$line','','1','$tran_line')")or die(mysql_error());
			}
		}
	}
	//echo $prov;
}

?>
</body>
</html>