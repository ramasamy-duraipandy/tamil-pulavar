<?php
include("connection.php");
if($_POST['id'])
{
$id=$_POST['id'];
//$check = $id."finished";
mysql_query("DELETE FROM `gword` WHERE `sno`='$id'")or die(mysql_error());
//mysql_query("DELETE FROM `for_admin` WHERE `sentance_no`='$id'")or die(mysql_error());
//mysql_query("ALTER TABLE `sentance` DROP COLUMN `$id`")or die(mysql_error());
//mysql_query("ALTER TABLE `sentance` DROP COLUMN `$check`")or die(mysql_error());

}
?>