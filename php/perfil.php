<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Título de la página -->
		<title>Yakkety Yak</title>
		
		<!-- Hoja de estilos general -->
		<link rel="stylesheet" type="text/css" href="css/base.css"/>
		<!-- Hoja de estilos perfil -->
		<link rel="stylesheet" type="text/css" href="css/perfil.css"/>	

		<!-- modificar campos -->
		<script src="js/perfil.js"></script>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		
		<!-- Caracteres especiales -->
		<meta charset="utf-8" />

		<style>
			#addEmail_cont{
				
			}

			#addEmail_contmod{
							
			}
		</style>
	</head>
	
	<body>
		<!-- Totalidad del menu -->
		<header class="menu">	
			
			<!-- Contenedor del menu cuando te logueas -->
			<header class="menu-container logueado">
				<!-- Imagen del logo -->
				<nav class="logo_container"><a href="index.html"><img class="logo_img" src="img/logo.png" </a></nav>				

				<!-- Navegador -->	
				<nav><a href="perfil.php"><img class="logo_button" src="img/icons/default_user.png" onmouseover="this.src='img/icons/default_user_on.png';" onmouseout="this.src='img/icons/default_user.png';"/></a></nav>				
			 	<nav><a href=""><img class="logo_button" src="img/icons/settings.png" onmouseover="this.src='img/icons/settings_on.png';" onmouseout="this.src='img/icons/settings.png';"/></a></nav>
			 	<nav><a href="index.html"><img class="logo_button" src="img/icons/logout.png" onmouseover="this.src='img/icons/logout_on.png';" onmouseout="this.src='img/icons/logout.png';"/></a></nav>
			   	<nav class="lan-item">ES</nav>
					
			<!-- Cierre Contenedor del menu -->		
			</header>				

			<!-- menu movil -->
			<nav class="menu-movil">
				<img class="img_movil"src="img/icons/home.png"/>
				<img class="img_movil"src="img/icons/search.png"/>
				<img class="img_movil"src="img/icons/user.png"/>
			<!-- Cierre menu del movil -->		
			</nav>

		<!-- Cierre de Totalidad del menu -->	
		</header>

		<!-- /////////////////////////////////////////////// -->

		<!-- RECUPERACION DE DATOS DE FORMULARIO DE REGISTRO -->
		<?php
			//Cogemos el contenido de fichero.txt y lo almacenamos en un array
			$user_info = file('fichero.txt');

			//cogemos los datos de la fecha por separado para poder modificarlos
			$user_dia = substr($user_info[2], 0, 2);
			$user_mes = substr($user_info[2], 3, 2);
			$user_anyo = substr($user_info[2], 6, 4);

			//para saber el indice de la variable que queremos recuperar
			//var_dump($user_info);
		?>
		
		<!-- Contenedor principal -->
		<section class="container">	
			<!-- seccion avatar-->
			<section class="aside_container">
				<!-- imagen del avatar -->
				<img class="avatar" src="img/perfil.jpg" />

				<!-- Recuperamos nombre y apellidos -->
				<h3><?php echo $user_info[0] . " " . $user_info[1];?></h3>
				<!-- Recuperamos nick -->
				<h3><?php echo $user_info[6];?></h3><br>						

				<!-- Contactos // Speakers -->
				<section class="aside_info">
					<span class="datos dataspeak">Speakers</span> <br>
					<div class="speakers_div">
						<img class="speakers" src="img/speakers/belen.jpg">
						<img class="speakers" src="img/speakers/sio.jpg">
						<img class="speakers" src="img/speakers/nyka.jpg">
					</div>										
				</section>

				<!-- Visitantes -->
				<section class="aside_info"> 
					<span class="datos dataspeak">Visitantes</span> <br>
					<div class="speakers_div">
						<img class="speakers" src="img/speakers/david.jpg">
						<img class="speakers" src="img/speakers/patri.jpg">
						<img class="speakers" src="img/speakers/ale.jpg">				
					</div>
				</section>
			<!-- fin seccion avatar-->
			</section>

			<!-- ////////////////////////////// DATOS DATOS ////////////////////////////// -->

			<!-- Contenedor perfil datos -->
			<section class="profile_container ">

				<!-- ////////////////////////////// DATOS PERSONALES ////////////////////////////// -->

				<!-- Datos personales -->
				<section id="personales_view" class="user_info view">
					<h1>DATOS PERSONALES</h1><br>
					<!-- Recuperamos nombre -->
					<span class="datos">Nombre: </span><?php echo $user_info[0];?><br>
					<!-- Recuperamos apellidos -->
					<span class="datos">Apellido/s: </span><?php echo $user_info[1];?><br>
					<!-- Recuperamos fecha nacimiento -->
					<span class="datos">Fecha de Nacimiento: </span><?php echo $user_info[2];?><br>
					<!-- Recuperamos sexo -->
					<span class="datos">Sexo: </span><?php echo $user_info[3];?><br>
					<!-- Recuperamos pais -->
					<span class="datos">País: </span><?php echo $user_info[4];?><br>
					<!-- Recuperamos cp -->
					<span class="datos">Código Postal: </span><?php echo $user_info[5];?><br>

					<!-- Boton para modificar el contenido-->
					<input id="personales_button" type="button" value="Modificar" class="boton">
				<!-- cierre de datos personales -->
				</section>

				<!-- Cambiar Datos personales-->
				<section id="personales_mod" class="user_info" style="display:none;">
					<h1>DATOS PERSONALES</h1><br>		
					<form action="mod_perfil.php" method="post">
						<table width="450">
							<tr>
								<!-- cambiar nombre -->
								<td><span class="datos">Nuevo nombre: </span></td>
								<td><input type="text" name="newname" value="<?php $user_info[0];?>" placeholder="<?php echo $user_info[0];?>"></td>
							</tr>
							<tr>
								<!-- cambiar apellidos -->
								<td><span class="datos">Nuevo/s apellido/s: </span></td>
								<td><input type="text" name="newapellido" placeholder="<?php echo $user_info[1];?>"></td>
							</tr>
							<tr>
								<!-- cambiar fecha nacimiento -->
								<td><span class="datos">Nueva fecha nacimiento: </span></td>
								<td><input type="text" name="newdia" size="1" maxlength="2" placeholder="<?php echo $user_dia;?>"> /
								<input type="text" name="newmes" size="1" maxlength="2" placeholder="<?php echo $user_mes;?>"> /
								<input type="text" name="newanyo" size="1" maxlength="4" placeholder="<?php echo $user_anyo;?>"></td>
							</tr>
							<tr>
								<!-- cambiar sexo -->
								<td><span class="datos">Nuevo sexo: </span></td>
								<td><select name="newsexo">
									<option value="hombre">Hombre</option> 
									<option value="mujer">Mujer</option> 
									 <option value="indeterminado">Indeterminado</option>					   
								</select></td>
							</tr>
							<tr>	
								<!-- cambiar pais -->
								<td><span class="datos">Nuevo país: </span></td>
								<td><input type="text" name="newpais" placeholder="<?php echo $user_info[4];?>"></td>
							</tr>
							<tr>
								<!-- cambiar cp -->
								<td><span class="datos">Nuevo cp: </span></td>
								<td><input type="text" name="newcp" placeholder="<?php echo $user_info[5];?>"></td>
							</tr>
						</table>						

						<!-- Botones cerrar y enviar -->
						<input id="personales_close" type="button" value="Cerrar" class="boton">
						<input id="modpersonales_button" type="submit" value="Guardar" class="boton">						
					</form>
				<!-- cierre de Datos personales MOD -->
				</section>



				<!-- ////////////////////////////// DATOS CUENTA ////////////////////////////// -->

				<!-- Datos cuenta -->
				<section id="cuenta_view" class="user_info">
					<h1>DATOS CUENTA</h1><br>
					<!-- Recuperamos nick -->
					<span class="datos">Nick: </span><?php echo $user_info[6];?><br>
					<!-- Recuperamos fecha creacion -->
					<span class="datos">Se unió el: </span><?php echo $user_info[13];?><br>
					<!-- Recuperamos email -->
					<span class="datos">Email: </span><?php echo $user_info[8];?><br>					
										
					<!-- Boton para modificar el contenido-->
					<input id="cuenta_button" type="button" value="Modificar" class="boton">
				<!-- cierre de datos cuenta -->
				</section>

				<!-- Cambiar DATOS CUENTA-->
				<section id="cuenta_mod" class="user_info" style="display:none;">
					<h1>DATOS CUENTA</h1>	
					No puedes cambiar ni tu nick ni la fecha de creación de cuenta. <br>
					Pero puedes cambiar tu email principal. <br><br>  	
					<form action="mod_perfil.php" method="post">
						<!-- cambiar email -->
						<span class="datos">Nuevo email principal: </span>
						<input type="text" name="newmail"></br>	
							
						<!-- confirmar email -->
						<span class="datos">Confirmar Nuevo email principal: </span>
						<input type="text" name="newmail_conf"></br>											

						<!-- Botones cerrar y enviar -->
						<input id="cuenta_close" type="button" value="Cerrar" class="boton">
						<input id="modcuenta_button" type="submit" value="Guardar" class="boton">
					</form>
				<!-- cierre de Datos cuenta MOD -->
				</section>



				<!-- ////////////////////////////// DATOS ADICIONALES ////////////////////////////// -->

				<!-- Datos adicionales -->
				<section id="adicionales_view" class="user_info ">
					<h1>DATOS ADICIONALES</h1><br>
					<!-- Recuperamos idioma -->
					<span class="datos">Idioma: </span><?php echo $user_info[9];?><br>
					<!-- Recuperamos Profesión -->
					<span class="datos">Profesión: </span><?php echo $user_info[10];?><br>
					<!-- Recuperamos Aficiones -->
					<span class="datos">Aficiones: </span><?php echo $user_info[11];?><br>
					<!-- Recuperamos Disponibilidad -->
					<span class="datos">Disponibilidad: </span><?php echo $user_info[12];?><br>
					
					<!-- Boton para modificar el contenido-->
					<input id="adicionales_button" type="button" value="Modificar" class="boton">
				<!-- cierre de datos adicionales -->
				</section>

				<!-- Cambiar DATOS ADICIONALES -->
				<section id="adicionales_mod" class="user_info" style="display:none;">
					<h1>DATOS ADICIONALES</h1><br>  	
					<form action="mod_perfil.php" method="post">
						<table>
							<tr>
								<!-- cambiar idioma -->
								<td><span class="datos">Nuevo idioma: </span></td>
								<td><select name="newidioma">
        		   					<option value="Español">Español</option> 
			   						<option value="Inglés">Inglés</option> 
			   						<option value="Otro">Otro</option>					   
								</select></td>				
							</tr>

							<tr>
								<!-- cambiar Profesión -->
								<td><span class="datos">Nueva profesión: </span></td>
								<td><input type="text" name="newprofesión" placeholder="<?php echo $user_info[10];?>"></td>
							</tr>

							<tr>
								<!-- cambiar Aficiones -->
								<td><span class="datos">Nuevas aficiones: </span></td>
								<td><textarea name="newaficiones" cols="50" rows="5" placeholder="<?php echo $user_info[11];?>"></textarea></td>
							</tr>

							<tr>
								<!-- cambiar Disponibilidad -->
								<td><span class="datos">Nueva disponibilidad: </span></td>
								<td><input type="text" name="newdisponibilidad" placeholder="<?php echo $user_info[12];?>"></td>											
							</tr>
						</table>

						<!-- Botones reset y enviar -->
						<input id="adicionales_close" type="button" value="Cerrar" class="boton">
						<input id="modadicionales_button" type="submit" value="Guardar" class="boton">
					</form>
				<!-- cierre de Datos adicionales MOD -->
				</section>



				<!-- ////////////////////////////// AVATAR ////////////////////////////// -->

				<!-- Cambiar avatar -->
				<section class="user_info">
					<h1>CAMBIAR AVATAR</h1>
					Cambia tu imagen personal y ponla a tu gusto.<br><br>
					<form action="" method="post">
						<input type="file" value="Selecciona imagen">
					</form>
				<!-- cierre de datos adicionales -->
				</section>



				<!-- ////////////////////////////// PASSWORD ////////////////////////////// -->

				<!-- Cambiar password VIEW -->
				<section id="pass_view" class="user_info">
					<h1>CAMBIAR PASSWORD</h1>
					Si deseas cambiar tu password rellena los campos.<br> 
					Te enviaremos un mensaje a tu email principal comunicándote el cambio de password. <br><br>			
										
					<!-- Boton para modificar el contenido-->
					<input id="pass_button" type="submit" value="Cambiar Password" class="boton">
				<!-- cierre de password VIEW -->
				</section>

				<!-- Cambiar password MOD-->
				<section id="pass_mod" class="user_info" style="display:none;">
					<h1>CAMBIAR PASSWORD</h1>
					Si deseas cambiar tu password rellena los campos.<br> 
					Te enviaremos un mensaje a tu email principal comunicándote el cambio de password. <br><br>			
					<form action="mod_perfil.php" method="post">
						<!-- cambiar password -->
						<span class="datos">Nuevo password: </span>
						<input type="password" name="newpass"> <br>
						<!-- confirmar cambiar password -->
						<span class="datos">Confirmar nuevo password: </span>
						<input type="password" name="newpass_conf"> <br>

						<!-- Botones reset y enviar -->
						<input id="pass_close" type="button" value="Cerrar" class="boton">
						<input id="modpass_button" type="submit" value="Guardar" class="boton">
					</form>
				<!-- cierre de password MOD -->
				</section>



				<!-- ////////////////////////////// EMAIL SECUNDARIO ////////////////////////////// -->

				<!-- Añadir email secundario VIEW -->
				<section id="addEmail_cont" class="user_info last_info view">
					<h1>EMAIL SECUNDARIO</h1>	
					Añadir un email secundario a tu cuenta te permitirá, en el caso de pérdida del email principal, mantener contacto con tu cuenta en Yakkety Yak. <br><br>	

					<?php
						if(empty($user_info[14])){
							print "<span class='datos'>Email Secundario:</span> No especificado <br>";
						}else{
							print "<span class='datos'>Email Secundario:</span> $user_info[14] <br>";
						}						
					?>	
										
					<!-- Boton para modificar el contenido-->
					<input id="addEmail" type="button" value="Añadir Email Secundario" class="boton">
				<!-- Añadir email secundario VIEW -->
				</section>

				<!-- Añadir email secundario MOD -->
				<section id="addEmail_contmod" class="user_info last_info mod" style="display:none;">
					<h1>EMAIL SECUNDARIO</h1>
					Añadir un email secundario a tu cuenta te permitirá, en el caso de pérdida del email principal, mantener contacto con tu cuenta en Yakkety Yak. <br><br>	
					<form action="mod_perfil.php" method="post">
						<!-- email secundario -->
						<span class="datos">Email secundario: </span>
						<input type="text" name="esecond"> <br>
						<!-- confirmar email secundario -->
						<span class="datos">Confirmar email secundario: </span>
						<input type="text" name="esecond_conf"> <br>
						
						<!-- Botones reset y enviar -->
						<input id="email_close" type="button" value="Cerrar" class="boton">
						<input id="addEmail_mod" type="submit" value="Guardar" class="boton">
					</form>					
				<!-- Añadir email secundario MOD -->
				</section>

			<!-- cierre de perfil -->
			</section>
			
		<!-- Cierre Contenedor principal -->
		</section>	

		<!-- /////////////////////////////////////////////// -->		
		
		<!-- Totalidad del pie -->
		<footer>				
			<!-- Contenedor del pie -->
			<div class="foot-container">
			
				<ul class="foot_links">
					<!-- MAPA --> 
					<li class="foot-item">					
						<header class= "cabecera">Mapa</header>
						<nav class= "list">Inicio</nav>
						<nav class= "list">Avatar</nav>
						<nav class= "list">Usuarios</nav>
						<nav class= "list">Viajes</nav>	
						<nav class= "list">Galerias</nav>					
					</li>	

					<!-- INTERES --> 
					<li class="foot-item">					
						<header class= "cabecera">Interés</header>
						<nav class= "list">Skype</nav>
						<nav class= "list">Flickr</nav>
						<nav class= "list">Tumblr</nav>								
					</li>
					
					<!--  --> 
					<li class="foot-item">					
						<header class= "cabecera">Interés</header>
						<nav class= "list">Skype</nav>
						<nav class= "list">Flickr</nav>
						<nav class= "list">Tumblr</nav>								
					</li>
					
					<!--  --> 
					<li class="foot-item">					
						<header class= "cabecera">Interés</header>
						<nav class= "list">Skype</nav>
						<nav class= "list">Flickr</nav>
						<nav class= "list">Tumblr</nav>								
					</li>
											
					<!-- CONTACTA --> 
					<li class="foot-item">					
						<header class= "cabecera">Contacta</header>
						<nav class= "list">659258023</nav>
						<nav class= "list">yaketyyak@yaketyyak.com</nav>			
					</li>
				</ul>
				
				<ul class="foot_aside">				
					<!-- Parte SOCIAL -->
					<li>
						<img src="img/icons/twitter_on.png" onmouseover="this.src='img/icons/twitter.png';" onmouseout="this.src='img/icons/twitter_on.png';"/>
						<img src="img/icons/g+_on.png" onmouseover="this.src='img/icons/g+.png';" onmouseout="this.src='img/icons/g+_on.png';"/>						
						<img src="img/icons/facebook_on.png" onmouseover="this.src='img/icons/facebook.png';" onmouseout="this.src='img/icons/facebook_on.png';"/>
					</li>					
				</ul>						
			</div>
			
			<!-- foot movil -->
			<nav class="foot-movil">
				<img class="foot_img"src="img/icons/email.png"/>
				<img class="foot_img"src="img/icons/facebook.png"/>
				<img class="foot_img"src="img/icons/g+.png"/>
				<img class="foot_img"src="img/icons/twitter.png"/>
			<!-- Cierre foot del movil -->		
			</nav>
		<!-- Cierre de del Pie -->	
		</footer>
	</body>	
</html>