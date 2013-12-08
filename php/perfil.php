<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Título de la página -->
		<title>Yakkety Yak</title>
		
		<!-- Hoja de estilos general -->
		<link rel="stylesheet" type="text/css" href="css/base.css"/>
		<!-- Hoja de estilos perfil -->
		<link rel="stylesheet" type="text/css" href="css/perfil.css"/>	

		<!-- Popups para modificar -->
		<script src="js/popups.js"></script>
		<!-- Hoja de estilos popups -->
		<link rel="stylesheet" type="text/css" href="css/popups.css"/>	
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		
		<!-- Caracteres especiales -->
		<meta charset="utf-8" />
	</head>
	
	<body>
		<!-- Totalidad del menu -->
		<header class="menu">	
			
			<!-- Contenedor del menu cuando te logueas -->
			<header class="menu-container logueado">
				<!-- Imagen del logo -->
				<nav class="logo_container"><a href="index.html"><img class="logo_img" src="img/logo.png" </a></nav>				

				<!-- Navegador -->					
			 	<nav><a href=""><img class="logo_button" src="img/icons/settings.png" onmouseover="this.src='img/icons/settings_on.png';" onmouseout="this.src='img/icons/settings.png';"/></a></nav>
			 	<nav><a href=""><img class="logo_button" src="img/icons/logout.png" onmouseover="this.src='img/icons/logout_on.png';" onmouseout="this.src='img/icons/logout.png';"/></a></nav>
			 	<nav><a href="perfil.php"><img class="logo_button" src="img/icons/default_user.png" onmouseover="this.src='img/icons/default_user_on.png';" onmouseout="this.src='img/icons/default_user.png';"/></a></nav>
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
			//Cogemos el contenido de fichero.txt y lo calmacenamos en un array
			$user_info = file('fichero.txt');
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


			<!-- Contenedor perfil datos -->
			<section class="profile_container">	
				<!-- Datos personales -->
				<section class="user_info">
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
					<input type="button" value="Modificar" class="boton">
				<!-- cierre de datos personales -->
				</section>

				<!-- Datos cuenta -->
				<section class="user_info">
					<h1>DATOS CUENTA</h1><br>
					<!-- Recuperamos nick -->
					<span class="datos">Nick: </span><?php echo $user_info[6];?><br>
					<!-- Recuperamos fecha creacion -->
					<span class="datos">Se unió el: </span><?php echo $user_info[15];?><br>
					<!-- Recuperamos email -->
					<span class="datos">Email: </span><?php echo $user_info[9];?><br>					
										
					<!-- Boton para modificar el contenido-->
					<input type="button" value="Modificar" class="boton">
				<!-- cierre de datos cuenta -->
				</section>

				<!-- Datos adicionales -->
				<section class="user_info ">
					<h1>DATOS ADICIONALES</h1><br>
					<!-- Recuperamos idioma -->
					<span class="datos">Idioma: </span><?php echo $user_info[11];?><br>
					<!-- Recuperamos Profesión -->
					<span class="datos">Profesión: </span><?php echo $user_info[12];?><br>
					<!-- Recuperamos Aficiones -->
					<span class="datos">Aficiones: </span><?php echo $user_info[13];?><br>
					<!-- Recuperamos Disponibilidad -->
					<span class="datos">Disponibilidad: </span><?php echo $user_info[14];?><br>
					
					<!-- Boton para modificar el contenido-->
					<input type="button" value="Modificar" class="boton">
				<!-- cierre de datos adicionales -->
				</section>

				<!-- Cambiar avatar -->
				<section class="user_info">
					<h1>CAMBIAR AVATAR</h1>
					Cambia tu imagen personal y ponla a tu gusto.<br><br>
					<form action="" method="post">
						<input type="file" value="Selecciona imagen">
					</form>
				<!-- cierre de datos adicionales -->
				</section>

				<!-- Cambiar password -->
				<section class="user_info">
					<h1>CAMBIAR PASSWORD</h1>
					Si deseas cambiar tu password rellena los campos.<br> 
					Te enviaremos un mensaje a tu email principal comunicándote el cambio de password. <br><br>			
					<span class="datos">Password Nuevo: </span> <br>
					<span class="datos">Confirmar Password Nuevo: </span> <br>
										
					<!-- Boton para modificar el contenido-->
					<input type="button" value="Cambiar Password" class="boton">
				<!-- cierre de datos adicionales -->
				</section>

				<!-- Añadir email secundario -->
				<section class="user_info last_info">
					<h1>EMAIL SECUNDARIO</h1>	
					Añadir un email secundario a tu cuenta te permitirá, en el caso de pérdida del email principal, mantener contacto con tu cuenta en Yakkety Yak. <br><br>	

					<?php
						if(empty($user_info[16])){
							print "<span class='datos'>Email Secundario:</span> No especificado <br>";
						}else{
							print "<span class='datos'>Email Secundario:</span> $user_info[16] <br>";
						}						
					?>	
										
					<!-- Boton para modificar el contenido-->
					<input id="addEmail" type="button" value="Añadir Email Secundario" class="boton">
				<!-- cierre de datos adicionales -->
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