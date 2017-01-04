<?php
	session_start();

	//Validamos que exita la variable de sesión "logueado"
	if (empty($_SESSION['logueado'])) {
		//Colocamos el código neciesario para mostrar una imagen de error de autorizacíón y un boton pára regresar al inicio (formulario de ingreso)

		echo "<!DOCTYPE html>
		<html>
		<head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE-edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>

			<title>Usuario no autorizado</title>
			<link href='assets/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
		</head>
		<body background='assets/img/marcianito100realnofeik.gif' style='text-align:center;padding:40px;cursor: url(http://cur.cursors-4u.net/games/gam-10/gam948.png), pointer;'>
			<div class='form-bottom'>
				<img src='assets/img/error403wow.jpg'><br>
				<h1 aling=center>No puedes entrar sin haber iniciado sesión, lince intergalactico</h1><br>
				<p>No puedes, no hay, no existe, ni siquiera lo intentes, rufian</p><br>
				<p>-10 y ban temporal por haber intentado. Noob >:v</p><br>
				<button style='cursor: url(http://cur.cursors-4u.net/games/gam-10/gam941.png), pointer;' class='btn btn-danger btn-lg' onclick=\"location.href='index.html'\">Regresar :´v</button><br><br>
				<img src='assets/img/tenor.gif'><br><br>
				<img src='assets/img/altoahi.jpg'><br><br>
				<img src='assets/img/pepelaranabailando.gif'>
				<img src='assets/img/Rana multicolor.gif'><br><br>
				<button style='cursor: url(http://cur.cursors-4u.net/games/gam-10/gam941.png), pointer;' class='btn btn-danger btn-lg' onclick=\"location.href='index.html'\">Regresar :´v</button>
				<h1 aling=center>#HAILGRASA prrro</h1><br>
				<h1 aling=center>#NOREGRETS</h1><br>
			</div>
		</body>
		</html>";
	}else{
		$op = (empty($_REQUEST['op'])) ? '' : $_REQUEST['op']; //Con esto evaluamos si viene algún parametro por metodo GET o POST

		//Llamamos la función plantilla
		plantilla();
		echo $_SESSION['plantilla']; //Colocamos en una variable de sesión el valor de la variable

		//Colocamos la condición para evaluar la salida del cms
		if ($op=="salir") {
			//Destruir la sesión
			session_destroy();
			//Redireccionamos al index
			header("Location:index.html");
		}
	}

	function plantilla(){
		$archivo = fopen('../plantillas/cmsa.html', 'r'); //Abrimos el archivo de la plantilla en modo de lectura
		$html = fread($archivo, filesize('../plantillas/cmsa.html')); //Asignamos a la variable html el archivo leido anteriormente
		fclose($archivo); //Cerramos el archivo de la plantilla
		$html = preg_replace('/--nombre--/', $_SESSION['nombre'], $html); //Reemplazamos los tags de sustitución de nuestra plantilla
		$_SESSION['plantilla'] = $html; //Colocamos en una variable de sesión el valor de nuestra variable html
	}
?>