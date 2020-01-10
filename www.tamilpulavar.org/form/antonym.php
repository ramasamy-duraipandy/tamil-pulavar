<?php
session_start();
include('../connection.php');
if($_SESSION['id'] == '')
{
	header('location:permission.php');
}
else
{
	$u_id   = 	$_SESSION['id'];	
	$wrd 	=	$_POST['wrd'];
	$mean   =	$_POST['mean'];
	$anton  =	$_POST['anton'];
	$syn 	= 	'';
	$qry    =	mysql_query("SELECT `tword` FROM `antonyms` WHERE `tword` = '$wrd'")or die(mysql_error());
	if(mysql_num_rows($qry) == 0)
	{
		$qry1    =	mysql_query("SELECT * FROM `synonym` WHERE `tword` = '$anton'")or die(mysql_error());
		if(mysql_num_rows($qry1) != 0)
		{	
			
			while($syns = mysql_fetch_array($qry1))
			{
				  $val    = $syns['meaning'];
				  $syn   .= mysql_real_escape_string($val).";";
			}
			$con 	=  mysql_real_escape_string($syn);
			mysql_query("INSERT INTO `antonyms` (`sno`,`tword`,`meaning`,`tword_meaning`,`user_id`) values 	('','$wrd','$anton','$mean','$u_id')") or die(mysql_error());
			$num	=	mysql_query("SELECT COUNT(*) FROM `antonyms` WHERE `user_id` = '$u_id'") or die(mysql_error());
			$ct	 =	mysql_fetch_array($num);
			$t_words= 	$ct['COUNT(*)'];
			$no	=	mysql_query("SELECT * FROM `rank_list` WHERE `user_id` = $u_id");
			if(mysql_num_rows($no) > 0)
			{
				
				mysql_query("UPDATE `rank_list` SET `total_words` = '$t_words' WHERE `user_id` = '$u_id'") or die(mysql_error());
			} 
			else
			{
				mysql_query("INSERT INTO `rank_list` (`sno`,`user_id`,`total_words`) values('','$u_id','$t_words')")or die(mysql_error());
			}
			echo "Successfully Inserted";
			unset($syn);
		}
		else
		{
			mysql_query("INSERT INTO `antonyms` (`sno`,`tword`,`meaning`,`tword_meaning`,`user_id`) values 	('','$wrd','$anton','$mean','$u_id')") or die(mysql_error());
			$num	=	mysql_query("SELECT COUNT(*) FROM `antonyms` WHERE `user_id` = '$u_id'") or die(mysql_error());
			$ct	 =	mysql_fetch_array($num);
			$t_words= 	$ct['COUNT(*)'];
			$no	=	mysql_query("SELECT * FROM `rank_list` WHERE `user_id` = $u_id");
			if(mysql_num_rows($no) > 0)
			{
				
				mysql_query("UPDATE `rank_list` SET `total_words` = '$t_words' WHERE `user_id` = '$u_id'") or die(mysql_error());
			}
			else
			{
				mysql_query("INSERT INTO `rank_list` (`sno`,`user_id`,`total_words`) values('','$u_id','$t_words')")or die(mysql_error());
			}
			echo "Successfully Inserted";
		}
	}
	else
	{
		echo "Word Already Existed";
	}
}
?>