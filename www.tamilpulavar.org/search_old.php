<?php
     include("connection.php");
    $key=trim($_GET['key']);
    $array = array();
	
    $query=mysql_query("select `hdwrd` from `hwrd` WHERE `hdwrd` LIKE '{$key}%'");
	//echo "select `tword` from `kazhakam` WHERE `tword` LIKE '%{$key}%'";
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = trim($row['hdwrd']);
    }
	//print_r($array);
    echo json_encode($array);
?>
