<?php
echo "FREE SEX PRESS THERE";
$logfile= 'iplog.log';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails= $_SERVER['REMOTE_ADDR'].' > '.$_SERVER['REMOTE_ADDR'].PHP_EOL;
$rc = fopen($logfile, "a"); 
fwrite($rc, $logdetails);
fclose($rc); 
?>