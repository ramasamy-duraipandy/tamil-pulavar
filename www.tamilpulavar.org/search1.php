<?php
    include("connection.php");
    $key=trim($_POST['key']);
    $array = array();
	
    $query=mysql_query("select `hdword` from `ewords` WHERE `hdword` LIKE '{$key}%' LIMIT 6");
	//echo "select `tword` from `kazhakam` WHERE `tword` LIKE '%{$key}%'";
    while($row=mysql_fetch_assoc($query))
    {
      $val = trim($row['hdword']);
	  ?>
       <div class="show" align="left" style="white-space: nowrap; cursor: pointer;">
    <span class="name"><?php echo $val; ?></span>
    </div>
      <?php
    }
	//print_r($array);
    //echo json_encode($array);
?>
