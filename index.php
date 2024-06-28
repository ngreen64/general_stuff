<?php

echo "Welcome to Server : ";
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
  echo $protocol.$server.$port;
echo "<br>";

echo "Running on backend IP address : ";
  $ip_addr = $_SERVER['SERVER_ADDR'];
  echo "\n".$ip_addr;
echo "<br>";

echo "My hostname is : ";
$myfile = fopen("/etc/hostname", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/etc/hostname"));
fclose($myfile);
?>
