<?php
include("../../connection.php");
if($_POST['id'])
{
$id=$_POST['id'];
$check = $id."finished";
mysql_query("DELETE FROM `members` WHERE `user_id`='$id'")or die(mysql_error());
mysql_query("ALTER TABLE `sentance` DROP COLUMN `$id`")or die(mysql_error());
mysql_query("ALTER TABLE `sentance` DROP COLUMN `$check`")or die(mysql_error());

}
?>