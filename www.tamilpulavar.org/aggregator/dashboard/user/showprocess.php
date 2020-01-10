<?php
include("../../connection.php");
$user_id = $_POST['user_id'];
date_default_timezone_set("Asia/Kolkata");
$date = date('d-m-Y H:i:s');
//echo $user_id;
$query_linkid = mysql_query("SELECT `links_id` FROM `links` WHERE `user_id` = '$user_id'")or die(mysql_error()); 
$fetch_linkid = mysql_fetch_array($query_linkid);
$link_id = $fetch_linkid['links_id'];
//echo $link_id;
$query_sublinkcount = mysql_query("SELECT `sublink` FROM `sublinks` WHERE `mainlink_id` = $link_id AND `checked` = 1 AND `user_id` = '$user_id' ") or die(mysql_error());
$count_sublinks = mysql_num_rows($query_sublinkcount);
$query_sentence = mysql_query("SELECT `sentances` FROM `sentance`");
$num_sentence = mysql_num_rows($query_sentence);

//echo "Links Processed:".$count_sublinks."<br>";
//echo "Sentence Completed:".$num_sentence."<br>";
echo $count_sublinks;
echo $num_sentence;

?>