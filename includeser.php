<?php
date_default_timezone_set('Asia/Calcutta');
function executework($srt)
{
	$db = mysqli_connect("localhost", "skilistic_skill", "KOjvD=If=05(","skilistic_skill");
	return $db->query($srt);
}
function executeworkpdbins($srt)
{
	$db = mysqli_connect("localhost","skilistic_skill","KOjvD=If=05(","skilistic_skill") or die(mysqli_connect_error());
	$qr=mysqli_query($db,$srt);
	return mysqli_insert_id($db);
}
function redirect($url) { 

if(headers_sent()) { 

?> 
<html><head> 
<script language="javascript" type="text/javascript"> 
<!-- 
window.parent.document.location='<?php print($url);?>'; 
//--> 
</script> 
</head></html> 
<?php 
exit; 

} else { 

header("Location: ".$url); 
exit; 

} 

} 
?>
