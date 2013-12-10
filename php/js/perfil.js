window.onload = function() {

	////////////////////////////// DATOS PERSONALES //////////////////////////////

	document.getElementById('personales_button').onclick = function() {
        document.getElementById('personales_view').style.display = 'none';
        document.getElementById('personales_mod').style.display = '';
    };

    document.getElementById('modpersonales_button').onclick = function() {
        document.getElementById('personales_view').style.display = '';
        document.getElementById('personales_mod').style.display = 'none';
    };


    ////////////////////////////// DATOS CUENTA //////////////////////////////

	document.getElementById('cuenta_button').onclick = function() {
        document.getElementById('cuenta_view').style.display = 'none';
        document.getElementById('cuenta_mod').style.display = '';
    };

    document.getElementById('modcuenta_button').onclick = function() {
        document.getElementById('cuenta_view').style.display = '';
        document.getElementById('cuenta_mod').style.display = 'none';
    };


    ////////////////////////////// DATOS ADICIONALES //////////////////////////////

	document.getElementById('adicionales_button').onclick = function() {
        document.getElementById('adicionales_view').style.display = 'none';
        document.getElementById('adicionales_mod').style.display = '';
    };

    document.getElementById('modadicionales_button').onclick = function() {
        document.getElementById('adicionales_view').style.display = '';
        document.getElementById('adicionales_mod').style.display = 'none';
    };


	////////////////////////////// PASSWORD //////////////////////////////

	document.getElementById('pass_button').onclick = function() {
        document.getElementById('pass_view').style.display = 'none';
        document.getElementById('pass_mod').style.display = '';
    };

    document.getElementById('modpass_button').onclick = function() {
        document.getElementById('pass_view').style.display = '';
        document.getElementById('pass_mod').style.display = 'none';
    };


	////////////////////////////// EMAIL SECUNDARIO //////////////////////////////

	document.getElementById('addEmail').onclick = function() {
        document.getElementById('addEmail_cont').style.display = 'none';
        document.getElementById('addEmail_contmod').style.display = '';
    };

    document.getElementById('addEmail_mod').onclick = function() {
        document.getElementById('addEmail_cont').style.display = '';
        document.getElementById('addEmail_contmod').style.display = 'none';
    };
}