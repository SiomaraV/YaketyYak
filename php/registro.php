<?php
	//datos personales
	$nombre = $_REQUEST['nombre'];	
	$apellido = $_REQUEST['apellido'];	
	$dia = $_REQUEST['dia'];
	$mes = $_REQUEST['mes'];
	$anyo = $_REQUEST['anyo'];	
	$sexo = $_REQUEST['sexo'];
	$pais = $_REQUEST['pais'];
	$cp = $_REQUEST['cp'];
	
	//datos cuenta	
	$nick = $_REQUEST['nick'];
	$contrasena = $_REQUEST['contrasena'];
	$contrasena_confirmar = $_REQUEST['contrasena_confirmar'];
	$email = $_REQUEST['email'];
	$email_confirmar = $_REQUEST['email_confirmar'];
	
	//datos adicionales	
	$idioma = $_REQUEST['idioma'];
	$profesion = $_REQUEST['profesion'];
	$aficiones = $_REQUEST['aficiones'];
	$disponibilidad = $_REQUEST['disponibilidad'];

	//para saber cuando se ha creado el usuario...
	//zona horaria
	date_default_timezone_set('Europe/Madrid');
	//fecha completa
	$creacion = getdate();
	//dia de la fecha
	$dia_creacion = $creacion['mday'];
	//mes de la fecha
	$mes_creacion = $creacion['mon'];
	//año de la fecha
	$anyo_creacion = $creacion['year'];

	
	//////////////////////////////////////////////////////////////////////////////

	
	//abrimos fichero que almacenará 
	$fichero = fopen ("fichero.txt", "w"); 
	
	//introducimos datos personales
	//usamos la variable de cada campo seguida de \r\n (modo inverso no funciona) para que cada variable se escriba en una linea diferente
	fwrite($fichero, "$nombre \r\n");
	fwrite($fichero, "$apellido \r\n");
	//ponemos la fecha de nacimiento toda junta puesto que no nos interesa recuperarla separada
	fwrite($fichero, "$dia/$mes/$anyo \r\n");
	fwrite($fichero, "$sexo \r\n");
	fwrite($fichero, "$pais \r\n");
	fwrite($fichero, "$cp \r\n");

	//introducimos datos cuenta
	fwrite($fichero, "$nick \r\n");
	fwrite($fichero, "$contrasena \r\n");
	fwrite($fichero, "$contrasena_confirmar \r\n");
	fwrite($fichero, "$email \r\n");
	fwrite($fichero, "$email_confirmar \r\n");

	//introducimos datos adicionales
	fwrite($fichero, "$idioma \r\n");
	fwrite($fichero, "$profesion \r\n");
	fwrite($fichero, "$aficiones \r\n");
	fwrite($fichero, "$disponibilidad \r\n");

	//introducimos fecha de creacion
	fwrite($fichero, "$dia_creacion/$mes_creacion/$anyo_creacion \r\n");

	//cerramos fichero
	fclose($fichero);
	
	//redirigimos a login 
	header("Location:login.php");
?>