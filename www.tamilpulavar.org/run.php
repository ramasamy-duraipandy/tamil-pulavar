<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
$val = $_GET['val'];

if (strpos($val, 'http') !== false) 
{
  list($one,$two) = split("//",$val);
  
  list($un_used,$val) = split("/",$two);
}
?>
<form name="jussend" action="index.php" method="post">
<input type="hidden" name="typeahead" value="<?php echo $val;?>" />
</form>
<script>
document.forms['jussend'].submit();
</script>
</body>
</html>