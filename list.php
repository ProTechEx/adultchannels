<?php
//error_reporting(1);
header("Content-Type: text/plain");

$server = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$file = 'list.txt';

$response = file_get_contents($file);

echo str_replace("http://SERVERIP/master.php", str_replace("list.php","master.php",$server), $response);

?>