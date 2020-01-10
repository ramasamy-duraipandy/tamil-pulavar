<?php
session_start();
include('../connection.php');
include('../yapp/transliterate.php');
if($_SESSION['id'] == '')
{
	header('location:permission.php');
}
else
{
	$u_id   		= 	$_SESSION['id'];	
	$pala_wrd 	=	$_POST['pala_wrd'];
	$syn 		 = 	'';
	$qry    	 =	mysql_query("SELECT `proverb` FROM `proverbs` WHERE `proverb` = '$pala_wrd'")or die(mysql_error());
	if(mysql_num_rows($qry) == 0)
	{
		$literate = T2R($pala_wrd);
		mysql_query("INSERT INTO `proverbs`(`sno`, `proverb`,`user_id`,`literate`) VALUES ('NULL','$pala_wrd','$u_id','$literate')");
		echo "Successfully Inserted";
	}
	else
	{
		echo "Word Already Existed";
	}
}
?>