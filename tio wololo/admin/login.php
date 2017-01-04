<?php
include_once('conexion.php'); //Con este archivo incluido ya tenemos acceso a las variables de conexión, podemos sustituir en la cadena de conexión.

$usuario = (isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : '';
$password = (isset($_REQUEST['clave'])) ? $_REQUEST['clave'] : '';


$sql="select idusuario, nombre, clave from usuario where usuario='$usuario' and estado='A'";
$resultado = $mysqli->query($sql);
$fila = $resultado->fetch_assoc();
if($password == $fila['clave']) //En este punto evaluamos que el dato ingresado en el formulario coincida con el de nuestra base de datos
{
	//Si la condición se cumple abrimos la sesión
	session_start();
	//Declaramos las variables de sesión que concideremos necesarias para su posterior uso
	$_SESSION['logueado'] = 1;
	$_SESSION['idusuario'] = $fila['idusuario'];
	$_SESSION['nombre'] = $fila['nombre'];
	$_SESSION['usuario'] = $usuario;
	echo "Bienvenido"; //Si todo funciona correctamente nuestra función retorna el mensaje 'Bienvenido'
}
else
{
	echo "Usuario / password incorrectos";
}
?>