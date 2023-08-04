<?php
/*
$servername = "localhost";
$database = "coltybcp_peq";
$username = "junior";
$password = "junior";
sql.freedb.tech
3306
freedb_KAMEHOUSE
freedb_SAYAYIN
!Xa5m7tSwwXae4X


31.31.198.233
You saved “u1969005_sayayin”’s 
privileges on the database 
“u1969005_goku2”.
Junior23$




162.241.61.75
*/
$servername = "localhost";
$database = "coltybcp_peq";
$username = "junior";
$password = "junior";
$port = "3306";


$path = "https://coltricolpersolikexm.site/";


function conectar (){
	$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]);	
	//$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"], $GLOBALS["port"]);	
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function sentencia($conn, $sql){
	$rst = mysqli_query($conn, $sql);
	return $rst;
}

function contarfilas ($rst){
	$nRows = mysqli_num_rows($rst);
	return $nRows;
}

function traerdatos($rst){
	$filas = mysqli_fetch_assoc($rst);	
	return $filas;
}



function desconectar ($conn){
	mysqli_close($conn);
}


?>
