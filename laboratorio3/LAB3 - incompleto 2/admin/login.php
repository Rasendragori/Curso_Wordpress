<?php
	
	include_once('conexion.php'); //con este archivo incluido tenemos acceso a las variables de conexión.

	

	/*$mysqli = new mysqli($conf['server'],$conf['userdb'],$conf['pwddb'],$conf['db'],$conf['puerto']);

	$usuario = $mysqli->real_escape_string((isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : '');
	
	$password = $mysqli->real_escape_string((isset($_REQUEST['clave'])) ? $_REQUEST['clave']:'');

	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
	}*/

	$usuario = (isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : '';

	$password = (isset($_REQUEST['clave'])) ? $_REQUEST['clave'] : '';

	$sql = "select idusuario,nombre,clave from usuario where usuario='$usuario' and estado='A'";

	$resultado = $mysqli->query($sql);

	$fila = $resultado->fetch_assoc();

	if($password==$fila['clave']){ //evaluamos si el dato ingresado en el formulario coincide con el de la DB
		//Si la condición se cumple abrimos la sesión
		session_start();
		//Declaramos las variables de sesión que consideremos que sean necesarias para su posterior uso
		$_SESSION['logueado'] = 1;
		$_SESSION['idusuario'] = $fila['idusuario'];
		$_SESSION['nombre'] = $fila['nombre'];
		$_SESSION['usuario'] = $usuario;
		echo "Bienvenido"; //Si todo funciona, nuestra función retornara el mensaje "Bienvenido"
	}
	else{
		echo "Usuario / Contraseña incorrecto";
	}


?>