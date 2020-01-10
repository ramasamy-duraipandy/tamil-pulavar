<?php 
include("connection.php");
$table = "sentance";
ExportExcel($table);

function ExportExcel($table)
	{
		$filename = "uploads/".strtotime("now").'.xls';
		header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=$filename");
		
		$sql = mysql_query("SELECT `sentances` FROM $table") or die(mysql_error());
		echo $head = '<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Untitled Document</title></head><body>';
		//$myfile = fopen("newfile.html", "w") or die("Unable to open file!");
		//fwrite($myfile, $head);		
	$num_rows = mysql_num_rows($sql);
		if($num_rows >= 1)
		{
			$row = mysql_fetch_assoc($sql);
			$fp = fopen($filename, "w");
			$seperator = "";
			$comma = "";

			foreach ($row as $name => $value)
				{
					$seperator .= $comma . '' .str_replace('', '""', $name);
					$comma = ",";
				}

			$seperator .= "\n";
			//fputs($fp, $seperator);
	
			mysql_data_seek($sql, 0);
			while($row = mysql_fetch_assoc($sql))
				{
					$seperator = "";
					$comma = "";

					foreach ($row as $name => $value) 
						{
							$seperator .= $comma . '' .str_replace('', '""', $value);
							$comma = ",";
						}

					echo $seperator .= "<br>";
					
					//fwrite($myfile, $seperator);
					
					//$seperator = utf8_encode($seperator);
					//mb_internal_encoding("UTF-8");
					//echo $seperator;
					//fputs($fp, $seperator);
				}
			echo $foot = "</body></html>";
				//fwrite($myfile,$foot);
			//fclose($myfile);
			//fclose($fp);
			//echo "Your file is ready. You can download it from <a href='$filename'>here!</a>";
		}
		


	}
?>
<script>
window.close();
</script>
