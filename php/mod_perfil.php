<?php
	//Recuperamos la info del fichero 
	$user_info = file('fichero.txt');

	//recuperamos fecha nacimiento separada
	$user_dia = substr($user_info[2], 0, 2);
	$user_mes = substr($user_info[2], 3, 2);
	$user_anyo = substr($user_info[2], 6, 4);
	

	///////////////////// DATOS PERSONALES /////////////////////
	if(isset($_REQUEST['newname']) or isset($_REQUEST['newapellido']) or isset($_REQUEST['newdia'])
		or isset($_REQUEST['newmes']) or isset($_REQUEST['newanyo']) or isset($_REQUEST['newsexo'])
		or isset($_REQUEST['newpais']) or isset($_REQUEST['newcp'])){

		//Recuperar datos personales modificados
		$newname = $_REQUEST['newname'];
		$newapellido = $_REQUEST['newapellido'];

		$newdia = $_REQUEST['newdia'];
		$newmes = $_REQUEST['newmes'];
		$newanyo = $_REQUEST['newanyo'];

		$newsexo = $_REQUEST['newsexo'];
		$newpais = $_REQUEST['newpais'];
		$newcp = $_REQUEST['newcp'];

		//si estan vacios los campos mantiene su valor antiguo
		//nombre
		if ($newname == ''){
			$newname = trim($user_info[0]);					
		}

		//apellido
		if ($newapellido == ''){
			$newapellido = trim($user_info[1]);
		}

		//dia
		if($newdia == ''){
			$newdia = $user_dia;
		}

		//mes
		if($newmes == ''){
			$newmes = $user_mes;
		}

		//año
		if($newanyo == ''){
			$newanyo =$user_anyo;
		}		

		//pais
		if($newpais == ''){
			$newpais = trim($user_info[4]);
		}

		//cp
		if($newcp == ''){
			$newcp = trim($user_info[5]);
		}

		//abrimos de nuevo el fichero
		$fichero = fopen("fichero.txt", "w");

		//volvemos a escribir todo con la modificacion 
		fwrite($fichero, "$newname  \r\n"); 
		fwrite($fichero, "$newapellido  \r\n"); 
		fwrite($fichero, "$newdia/$newmes/$newanyo \r\n"); 
		fwrite($fichero, "$newsexo \r\n"); 
		fwrite($fichero, "$newpais \r\n");
		fwrite($fichero, "$newcp\r\n"); 
		fwrite($fichero, $user_info[6]);  
		fwrite($fichero, $user_info[7]);  
		fwrite($fichero, $user_info[8]); 
		fwrite($fichero, $user_info[9]); 
		fwrite($fichero, $user_info[10]);
		fwrite($fichero, $user_info[11]); 
		fwrite($fichero, $user_info[12]); 
		fwrite($fichero, $user_info[13]); 

		//cerramos fichero
        fclose($fichero);     
	}



	
	///////////////////// DATOS CUENTA /////////////////////
	if(isset($_REQUEST['newmail']) and isset($_REQUEST['newmail_conf'])){

		//recuperamos valores introducidos
		$newmail = $_REQUEST['newmail'];
		$newmail_conf = $_REQUEST['newmail_conf'];

		//si los dos passwords son iguales..
		if($newmail == $newmail_conf){
			
			//abrimos de nuevo el fichero
			$fichero = fopen("fichero.txt", "w");

			//volvemos a escribir todo con la modificacion 
			fwrite($fichero, $user_info[0]); 
			fwrite($fichero, $user_info[1]); 
			fwrite($fichero, $user_info[2]); 
			fwrite($fichero, $user_info[3]); 
			fwrite($fichero, $user_info[4]);
			fwrite($fichero, $user_info[5]); 
			fwrite($fichero, $user_info[6]);  
			fwrite($fichero, $user_info[7]); 
			fwrite($fichero, "$newmail \r\n"); 
			fwrite($fichero, $user_info[9]); 
			fwrite($fichero, $user_info[10]);
			fwrite($fichero, $user_info[11]); 
			fwrite($fichero, $user_info[12]); 
			fwrite($fichero, $user_info[13]); 

			//cerramos fichero
            fclose($fichero);
		}
	}	


	///////////////////// DATOS ADICIONALES /////////////////////
	if(isset($_REQUEST['newidioma']) or isset($_REQUEST['newprofesión']) 
		or isset($_REQUEST['newaficiones']) or isset($_REQUEST['newdisponibilidad'])){

		//Recuperar datos adicionales modificados
		$newidioma = $_REQUEST['newidioma'];
		$newprofesión = $_REQUEST['newprofesión'];
		$newaficiones = $_REQUEST['newaficiones'];
		$newdisponibilidad = $_REQUEST['newdisponibilidad'];		

		//si estan vacios los campos mantiene su valor antiguo
		//profesion
		if ($newprofesión == ''){
			$newprofesión = trim($user_info[10]);					
		}
		//aficiones
		if ($newaficiones == ''){
			$newaficiones = trim($user_info[11]);					
		}
		//disponibilidad
		if ($newdisponibilidad == ''){
			$newdisponibilidad = trim($user_info[12]);					
		}		

		//abrimos de nuevo el fichero
		$fichero = fopen("fichero.txt", "w");

		//volvemos a escribir todo con la modificacion 
		fwrite($fichero, $user_info[0]); 
		fwrite($fichero, $user_info[1]); 
		fwrite($fichero, $user_info[2]); 
		fwrite($fichero, $user_info[3]); 
		fwrite($fichero, $user_info[4]);
		fwrite($fichero, $user_info[5]); 
		fwrite($fichero, $user_info[6]);  
		fwrite($fichero, $user_info[7]);  
		fwrite($fichero, $user_info[8]); 
		fwrite($fichero, "$newidioma \r\n"); 
		fwrite($fichero, "$newprofesión \r\n");
		fwrite($fichero, "$newaficiones \r\n"); 
		fwrite($fichero, "$newdisponibilidad \r\n"); 
		fwrite($fichero, $user_info[13]); 

		//cerramos fichero
        fclose($fichero);     
	}




	///////////////////// CAMBIO PASSWORD /////////////////////
	if(isset($_REQUEST['newpass']) and isset($_REQUEST['newpass_conf'])){

		//recuperamos valores introducidos
		$newpass = $_REQUEST['newpass'];
		$newpass_conf = $_REQUEST['newpass_conf'];

		//si los dos passwords son iguales..
		if($newpass == $newpass_conf){
			
			//abrimos de nuevo el fichero
			$fichero = fopen("fichero.txt", "w");

			//volvemos a escribir todo con la modificacion 
			fwrite($fichero, $user_info[0]); 
			fwrite($fichero, $user_info[1]); 
			fwrite($fichero, $user_info[2]); 
			fwrite($fichero, $user_info[3]); 
			fwrite($fichero, $user_info[4]);
			fwrite($fichero, $user_info[5]); 
			fwrite($fichero, $user_info[6]);  
			fwrite($fichero, "$newpass \r\n"); 
			fwrite($fichero, $user_info[8]); 
			fwrite($fichero, $user_info[9]); 
			fwrite($fichero, $user_info[10]);
			fwrite($fichero, $user_info[11]); 
			fwrite($fichero, $user_info[12]); 
			fwrite($fichero, $user_info[13]); 

			//cerramos fichero
            fclose($fichero);
		}
	}	
	

	///////////////////// EMAIL SECUNDARIO /////////////////////
	if(isset($_REQUEST['esecond']) and isset($_REQUEST['esecond_conf'])){		

		//recuperamos valores introducidos
		$esecond = $_REQUEST['esecond'];
		$esecond_conf = $_REQUEST['esecond_conf'];

		//si los dos emails secundarios son iguales...
		if($esecond == $esecond_conf){

			//si el email secundario no existe se añade
			if(empty($user_info[14])){
				//abrimos fichero
				$fichero = fopen("fichero.txt", "a");
				//escribimos emails
				fwrite($fichero, "$esecond \r\n");
				//cerramos fichero
				fclose($fichero);
		
			}else{
				//abrimos de nuevo el fichero
				$fichero = fopen("fichero.txt", "w");

				//volvemos a escribir todo con la modificacion 
				fwrite($fichero, $user_info[0]); 
				fwrite($fichero, $user_info[1]); 
				fwrite($fichero, $user_info[2]); 
				fwrite($fichero, $user_info[3]); 
				fwrite($fichero, $user_info[4]);
				fwrite($fichero, $user_info[5]); 
				fwrite($fichero, $user_info[6]);  
				fwrite($fichero, $user_info[7]); 
				fwrite($fichero, $user_info[8]); 
				fwrite($fichero, $user_info[9]); 
				fwrite($fichero, $user_info[10]);
				fwrite($fichero, $user_info[11]); 
				fwrite($fichero, $user_info[12]); 
				fwrite($fichero, $user_info[13]); 
				fwrite($fichero, "$esecond \r\n");

				//cerramos fichero
		        fclose($fichero);
			}
		}					
	}


	//redirigimos a perfil.php para ver los cambios pertinentes
	header("Location:perfil.php");	
?>