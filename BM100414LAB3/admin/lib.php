<?php

include_once('conexion.php');

session_start();

if (empty($_SESSION['logueado'])) {
	$acc = (empty($_REQUEST['acc'])) ? '' : $_REQUEST['acc'];
	if ($acc=="crearPagina") 
		crearPagina();
	if ($acc=="editarPagina") 
		editarPagina();
	if ($acc=="guardarPagina")
		guardarPagina();
}

function crearPagina(){
	global $mysqli;
	$base="../";
	$nombre = $_REQUEST['nbpagina'];
	$plantilla = $_REQUEST['plantilla'];

	$archivo = fopen($base.$nombre, 'w');
	fclose($archivo);

	$sql = "INSERT INTO paginas(nombre, plantilla) VALUES('$nombre', '$plantilla')";
	$mysqli->query($sql);

	echo 1;
}

function editarPagina(){
	global $mysqli;
	$pagina = $_REQUEST['pagina'];
	$plantilla = $_REQUEST['plantilla'];

	$sql = "SELECT idpagina, plantilla, contenido FROM paginas WHERE nombre = '$pagina'";
	$resultado = $mysqli->query($sql);
	$fila = $resultado->fetch_assoc();
	$_SESSION['idpagina'] = $fila['idpagina'];
	$_SESSION['plantilla'] = $fila['plantilla'];
	$_SESSION['destino'] = $idpagina;

	if (is_null($fila['contenido'])) {
		$contenido = 0;
	}
	else{
		$contenido = html_entity_decode($fila['contenido'], ENT_QUOTES, 'UTF-8');
	}

	$fp = fopen('plantillas/'.$_SESSION['plantilla'].'a', 'r');
	$html = fread($fp, filesize('plantillas/'.$_SESSION['plantilla'].'a'));

	$html = preg_replace('/Contenido', $contenido, $html);
	$html = preg_replace('/Menu', hacerMenu(), $html);

	echo $html;
}

function hacerMenu(){
	global $mysqli;

	$sql = "SELECT nombre FROM paginas WHERE estado = 'A'";
	$resultado = $mysqli->query($sql);
	$menu = "<div clase='list-group'>";
	while ($fila=$resultado->fetch_assoc) {
		$menu .= "<a href='".$fila['nombre']."' class='list-group-item'>".$fila['nombre']."</a>";
	}
	$menu .= "</div>";
	return $menu;
}

function guardarPagina(){
	global $mysqli;
	$contenido = rawurldecode($_REQUEST['codigo']);
	$sql="UPDATE paginas SET contenido='".htmlentities($contenido,ENT_QUOTES,"UTF-8")."' WHERE idpagina=".$_SESSION['idpagina'];
	$mysqli->query($sql);

	$fpin = fopen('plantillas/'.$_SESSION['plantilla'], 'r');
	$html = fread($fpin, filesize('plantillas/'.$_SESSION['plantilla']));
	fclose($fpin);

	$html = preg_replace('/Contenido', $contenido, $html);
	$html = preg_replace('/Menu', hacerMenu(), $html);

	$fpout = fopen('../'.$_SESSION['destino'], 'w');
	fwrite($fpout, $html);
	fclose($fpout);

	echo "¡Página guardada satisfactoriamente!";

}

?>