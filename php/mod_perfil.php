<?php
	//Recuperamos la info del fichero 
	//$user_info = file('fichero.txt');
	
/*
	///////////////////// DATOS PERSONALES /////////////////////
	if(isset($_REQUEST['newname']) or isset($_REQUEST['newapellido']) or isset($_REQUEST['newdia'])
		or isset($_REQUEST['newmes']) or isset($_REQUEST['newanyo']) or isset($_REQUEST['newsexo'])
		or isset($_REQUEST['newpais']) or isset($_REQUEST['newcp'])){

		//Recuperar datos personales modificados
		//$newname = $_REQUEST['newname'];
		//$newapellido = $_REQUEST['newapellido'];

		//$newdia = $_REQUEST['newdia'];
		//$newmes = $_REQUEST['newmes'];
		//$newanyo = $_REQUEST['newanyo'];

		//$newsexo = $_REQUEST['newsexo'];
		//$newpais = $_REQUEST['newpais'];
		//$newcp = $_REQUEST['newcp'];

	
	
		
		header("Location:perfil.php");
	}

	///////////////////// CAMBIO PASSWORD /////////////////////
	if(isset($_REQUEST['newpass']) and isset($_REQUEST['newpass_conf'])){

		//recuperamos valores introducidos
		$newpass = $_REQUEST['newpass'];
		$newpass_conf = $_REQUEST['newpass_conf'];

		//si los dos passwords son iguales..
		if($newpass == $newpass_conf){
			//abrimos fichero
			$fichero = fopen("fichero.txt", "r+");

			//obtenemos todo el contenido
			while (!feof($fichero)){
				$mod[] = fgets($fichero);
			}

			//sustituimos la linea del password
			$mod[7] = $newpass;

			//cerramos fichero
			fclose($fichero);

			$fichero = fopen("fichero.txt", "w");
			fwrite($fichero,$mod[7]); 
            fclose($fichero);

            header("Location:perfil.php");
		}
	}	
*/	

	///////////////////// EMAIL SECUNDARIO /////////////////////
	if(isset($_REQUEST['esecond']) and isset($_REQUEST['esecond_conf'])){

		//recuperamos valores introducidos
		$esecond = $_REQUEST['esecond'];
		$esecond_conf = $_REQUEST['esecond_conf'];

		//si los dos email son iguales..
		if($esecond == $esecond_conf){
			//abrimos fichero
			$fichero = fopen("fichero.txt", "a");
			//escribimos emails
			fwrite($fichero, "$esecond \r\n");
			//cerramos fichero
			fclose($fichero);

		}
	}

	 header("Location:perfil.php");	
?>