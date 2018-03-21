<?php
$logfile= 'iplog.log';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails= $_SERVER['REMOTE_ADDR'].' > '.$_SERVER['REMOTE_ADDR'].PHP_EOL;
$rc = fopen($logfile, "a"); 
fwrite($rc, $logdetails);
fclose($rc); 
?>

<html>
<head>
<title>Arena smecherilor</title>
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>
<body background="bg.png">
<!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100%" height="100%">
  <param name=movie value="youare.swf">
  <param name=quality value=high>
  <embed src="youare.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100%" height="100%">
  </embed> 
</object> -->

<a style="color:white; font-size: 42px;" href=./task/copac>Copac</a>
</body>
</html>