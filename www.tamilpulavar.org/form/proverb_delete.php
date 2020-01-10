<?php
include("../connection.php");
if($_POST['info_id'])
{
$id	  =	$_POST['info_id'];
$process = 	$_POST['process'];
$res_se	=	mysql_query("SELECT `user_id` FROM `antonyms` WHERE `sno`='$id'");
$row_se 	=	mysql_fetch_array($res_se);
$u_id	  =	$row_se['user_id'];
$res_id	=	mysql_query("SELECT `email` FROM `members` WHERE `sno`='$u_id'");
$row_id 	=	mysql_fetch_array($res_id);
$u_email   =	$row_id['email'];

if($process == 'delete')
{
	mysql_query("DELETE FROM `proverbs` WHERE `sno`='$id'")or die(mysql_error());
	mail($u_email, 'Reg Word Submitted',"sir/madam,\n Sorry,Due to inappropriate,Your proverb has been deleted by admin ", "From:admin@tamilpulavar.org");
}
elseif($process == 'update')
{
	mysql_query("UPDATE `proverbs` SET `admin_checked`='1' WHERE `sno`='$id'")or die(mysql_error());
	mail($u_email, 'Reg Word Submitted',"sir/madam,\n your Proverb has been Added to tamilpulavar database.Thanks for your Support\n
	Regards,\n Admin ", "From:admin@tamilpulavar.org");
}
//mysql_query("DELETE FROM `for_admin` WHERE `sentance_no`='$id'")or die(mysql_error());
//mysql_query("ALTER TABLE `sentance` DROP COLUMN `$id`")or die(mysql_error());
//mysql_query("ALTER TABLE `sentance` DROP COLUMN `$check`")or die(mysql_error());

}
?>