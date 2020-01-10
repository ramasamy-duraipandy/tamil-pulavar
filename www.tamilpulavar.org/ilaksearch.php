<?php
	include("connection.php");
    $key=trim($_POST['key']);
    $array = array();
	/*mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("word")or die(mysql_error());
	mysql_query("SET NAMES 'utf8'");*/
    $query=mysql_query("select `hdwrd` from `ilak_hdwrd` WHERE `hdwrd` LIKE '{$key}%' LIMIT 5");
	//echo "select `tword` from `kazhakam` WHERE `tword` LIKE '%{$key}%'";
    while($row=mysql_fetch_assoc($query))
    {
      $val = $row['hdwrd'];
	  ?>
      <div class="show" align="left" style="white-space: nowrap; cursor: pointer;">
    <span class="name"><?php echo $val; ?></span>
    </div>
      <?php
	  
    }
	//print_r($array);
   // echo json_encode($array);
?>
