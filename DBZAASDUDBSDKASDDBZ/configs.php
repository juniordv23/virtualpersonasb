<?php   
$bd_host = "localhost";   
$bd_usuario = "coltybcp_peq";   
$bd_password = "root";   
$bd_base = "coltybcp_peq";   
$con = mysqli_connect($bd_host, $bd_usuario, $bd_password);   
mysqli_select_db($bd_base, $con);   
?>