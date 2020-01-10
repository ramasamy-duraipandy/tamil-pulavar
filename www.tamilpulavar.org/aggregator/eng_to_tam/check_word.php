<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keyword Category</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- CUSTOM STYLES-->
    <link href="../dashboard/assets/css/custom.css" rel="stylesheet" />
 <script>
		function call_del(id)
		{
						alert(id);
						var del_id = id;
						//alert(del_id);
						var info = 'id='+del_id;
						
						
						$.ajax({
						type: "POST",
						url: "check_word_delete.php",
						data: info,
						success: function(data){
							//alert(data);
						}
						});
						$("#"+id).animate({ backgroundColor: "#fbc7c7" }, "fast")
						.animate({ opacity: "hide" }, "slow");
						
						
						return false;
					
		}
		</script>
</head>
<body>
<?php
include("connection.php");
$result_fetch = mysql_query("SELECT * FROM `gword` WHERE `finished`='0' ORDER BY `eword` ASC LIMIT 20");
while($row = mysql_fetch_array($result_fetch))
{
	$sno[]   = $row['sno'];
	$eword[] = $row['eword'];
	$tword[] = $row['tword'];
}

?>
 <div id="page-inner">
<div class="container">
<br />
<form class="form-inline" action="" method="post">
<?php for($i=0;$i<count($sno);$i++)
{
	?>
<div class="row">

  <div class="col-md-2">
    <label for="exampleInputName2"><?php echo $eword[$i]; ?></label><br />
   <label for="exampleInputName2"><?php echo $tword[$i]; ?></label>
   <input type="hidden" name="sno<?php echo $i;?>" value="<?php echo $sno[$i];?>" />
    <input type="hidden" name="eword<?php echo $i;?>" value="<?php echo $eword[$i];?>" />
  </div>
  <div class="col-md-1">
    <label for="exampleInputEmail2">Verb</label><br />
   				<select class="form-control" name="vid<?php echo $i; ?>">
                   <option value="0">0</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   
                 </select>
  </div>
  <div class="col-md-3">
    <label for="exampleInputEmail2">Noun</label><br />
   				<select class="form-control" name="nid<?php echo $i; ?>" id="per_select<?php echo $i; ?>">
                   <option>0</option>
                   <option value="1">1-First Person Singular</option>
                   <option value="2">2-First Person Plural</option>
                   <option value="3">3-Second Person</option>
                   <option value="5">5-Third person male</option>
                   <option value="6">6-Third person Female</option>
                   <option value="7">7-Third Person Plural</option>
                   <option value="8">8-Third Person general</option>
                   
                 </select>
                 <div id="call<?php echo $i;?>">
                  <label for="exampleInputEmail2">evid</label><br />
                <select class="form-control" name="evid<?php echo $i; ?>">
                  <option value="0">0</option>
                  <option value="1">Living Things</option>
                  <option value="1">Non Living Things</option>
                </select>
                 </div>
                 
                 <script>
					$(document).ready(function(e) {
					$("#call<?php echo $i; ?>").hide();
					$("#per_select<?php echo $i; ?>").change(function()
					{
						var val = document.getElementById('per_select<?php echo $i; ?>').value;
						if(val == '8')
						{
							$("#call<?php echo $i; ?>").show();
						}
					});
					
					
				});
				
				
					
				</script>
                 
                 
                 
                 
  </div>
  <div class="col-md-1">
    <label for="exampleInputEmail2">Preposition</label><br />
   				<select class="form-control" name="pid<?php echo $i; ?>">
                  <option value="0">0</option>
                  <option value="1">1</option>
                </select>
  </div>
   <div class="col-md-2">
    <label for="exampleInputEmail2">Others</label><br />
   				<select class="form-control" name="oid<?php echo $i; ?>">
                  <option value="0">0</option>
                   <option value="1">1-pronoun</option>
                   <option value="2">2-Adjective</option>
                   <option value="3">3-Adverb</option>
                 </select>
  </div>
   <div class="col-md-2">
    <label for="exampleInputEmail2">Tense</label><br />
   				<select class="form-control" name="tense<?php echo $i; ?>">
                   <option value="0">Base Form</option>
                   <option value="1">Past</option>
                   <option value="2">past participle</option>
                   <option value="3">Future-(ing form)</option>
    			</select>
  </div>
  <div class="col-md-1">
  		<button type="button" class="glyphicon glyphicon-remove pull-right btn btn-danger" data-toggle="tooltip" data-placement="left" title="Click to delete Category" onClick="call(<?php echo $sno[$i]; ?>);"></button>
       
  </div>
</div>
<hr />
<?php } ?>
<input type="hidden" name="count" value="<?php echo $i; ?>" />
<button type="submit" class="btn btn-default" value="submit" name="submit">submit</button>
</form>
  </div>
  </div>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
	$count = $_POST['count'];
	for($f=0;$f<$count;$f++)
	{
		$snos = $_POST["sno$f"];
		$eng_word = $_POST["eword$f"];
		$vid = $_POST["vid$f"];
		$nid = $_POST["nid$f"];
		
		$pid = $_POST["pid$f"];
		$oid = $_POST["oid$f"];
		$tense = $_POST["tense$f"];	
		
		
		if($nid == 8)
				$evid = $_POST["evid$f"];
		else
				$evid = 0;
		
		$evid;		
		
		mysql_query("UPDATE `gword` SET `vid`='$vid',`nid`='$nid',`evid`='$evid',`pid`='$pid',`oid`='$oid',`tense`='$tense',`finished`='1' WHERE `eword`='$eng_word' AND `sno`='$snos'");
		//exit;
	}
}

?>