<?php
$usuario = (isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : '';
$password = (isset($_REQUEST['clave'])) ? ($_REQUEST['clave']) : '';

$mysqli = new mysqli("localhost","root","","cms_bm100414",3306);

if($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
}

$sql = "SELECT idusuario, nombre, clave FROM usuario WHERE usuario='$usuario' estado='A'";

$resultado = $mysqli->query($sql);

$fila = $resultado->fetch_assoc();

if($password==$fila['clave'])
	echo "Bienvenido ".$fila['nombre'];
else
	echo "Usuario / Contraseña incorrecto";
?>