
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
  <link rel="icon" type="image/png" href="monitor.png">
	<title>Sistema De Monitoreo</title>
	<link href="css/styles.css" rel="stylesheet">	
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>	
</head>
<body>
<div>
	
</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		window.location.href = "admin";
	});
</script>