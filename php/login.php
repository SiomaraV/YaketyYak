<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Título de la página -->
		<title>Yakkety Yak</title>
		
		<!-- Hoja de estilos general -->
		<link rel="stylesheet" type="text/css" href="css/base.css"/>
		<!-- Hoja de estilos login -->
		<link rel="stylesheet" type="text/css" href="css/login.css"/>	
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		
		<!-- Caracteres especiales -->
		<meta charset="utf-8" />
	</head>
	
	<body>
		<!-- Totalidad del menu -->
		<header class="menu">	
			
			<!-- Contenedor del menu por defecto -->
			<header class="menu-container default">
				<!-- Imagen del logo -->
				<nav class="logo_container"><span class="logo"><a href="index.html">YakettyYak</a></span></nav>				

				<!-- Navegador -->	
				<nav class="login-item"><a href="login.php">Entra</a></nav>
			 	<nav class="login-item reg"><a href="registro.html">Registrar</a></nav>
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
		
		<!-- Contenedor principal -->
		<section class="container">

			<!-- Datos login -->
			<section class="login_container">
				<?php
					if(empty($_REQUEST['elogin']) or empty($_REQUEST['plogin'])){
						print  "<form method='post' action='login.php'>			
									<section class='form_container'>
										<ul>							
											<li><input class='login_input' type='text' name='elogin' placeholder='Introduce tu email'></li>
											<li><input class='login_input' type='password' name='plogin' placeholder='Introduce tu password'></li>
											<li>
												<input type = 'checkbox' name='recordar'/><span class='titulo'>Recordarme</span>							
												<input class='boton' type='submit' value='Enviar'>
											</li>						
										</ul>
									</section>	
								</form>";
					}else{
						// Recuperamos valores introducidos en el login 
						$email_login = $_REQUEST['elogin'];
						$pass_login = $_REQUEST['plogin'];

						//Recuperamos valores de la bbdd, devuelva muchos valores asi que tengo que coger solo el del email y password
						//Como a la hora de escribir el fichero tenemos que poner \r\n tiene una longitus mayor compuesta por blancos, asi que los borramos con trim
						$bbdd = file('fichero.txt');
						$email_bbdd = trim($bbdd[9]); 
						$pass_bbdd = trim($bbdd[7]);
				
						//si el login esta bien nos vamos a perfil.php
						if(($email_login == $email_bbdd) and ($pass_login == $pass_bbdd)){
    						header("Location:perfil.php");
    					//sino muestra el formulario con mensaje error en rojo
						}else {
   							print  "<form method='post' action='login.php'>			
									<section class='form_container'>
										<ul>							
											<li><input class='login_input' type='text' name='elogin' placeholder='Introduce tu email'></li>
											<li><input class='login_input' type='password' name='plogin' placeholder='Introduce tu password'></li>
											<li class='login_error'>Email o Password Incorrectos</li>
											<li>
												<input type = 'checkbox' name='recordar'/><span class='titulo'>Recordarme</span>							
												<input class='boton' type='submit' value='Enviar'>
											</li>						
										</ul>
									</section>	
								</form>";
						}
					}						
				?>
			<!-- Cierre Datos login -->	
			</section>	
			
		<!-- Cierre Contenedor principal -->
		</section>			
		
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