<?php

include_once('config.php'); //incluimos el archivo que contiene las variables de conexión

//Creamos el objeto que hara la conexión a la base de datos
$mysqli = new mysqli($conf['server'],$conf['userdb'],$conf['pwddb'],$conf['db'],$conf['puerto']);

//Evaluamos si hay conexión
if ($mysqli->connect_errno) {
	echo "Fallo la conexión con MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}

?>