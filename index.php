<?php

echo "Welcome to Server : ";
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
  echo "<b>".$protocol.$server.$port."</b>";
echo "<br>";
echo "<br>";

echo "Running on backend IP address : ";
  $ip_addr = $_SERVER['SERVER_ADDR'];
  echo "<b>".$ip_addr."</b>";
echo "<br>";
echo "<br>";

echo "My hostname is : ";
$myfile = fopen("/etc/hostname", "r") or die("Unable to open file!");
echo "<b>".fread($myfile,filesize("/etc/hostname"))."</b>";
fclose($myfile);
?>
