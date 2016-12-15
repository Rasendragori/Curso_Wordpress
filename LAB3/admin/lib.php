<?php

 include_once('conexion.php');

 session_start();
 
 if(!empty($_SESSION['logueado']))
 {

   $acc = (empty($_REQUEST['acc'])) ? '' : $_REQUEST['acc'];
   if($acc=="crearPagina"){crear_pagina();}
   if($acc=="editarPagina"){editar_pagina();}
   if($acc=="guardarPagina"){guardar_pagina();}
 
 }

function crear_pagina()
{
  global $mysqli;
  $base="../";
  $nombre = $_REQUEST['nbpagina'];
  $plantilla = $_REQUEST['plantilla'];
   
  $archivo = fopen($base.$nombre,'w');
  fclose($archivo); 
  
  $sql="insert into pagina(nombre,plantilla) values('$nombre','$plantilla')";
  $mysqli->query($sql);
  
  echo 1;
}


function editar_pagina()
{
 global $mysqli;
 $pagina= $_REQUEST['pagina'];
 $sql="select idpagina,plantilla,contenido from pagina where nombre='$pagina'";
 $resultado = $mysqli->query($sql);
 $fila = $resultado->fetch_assoc();
 $_SESSION['idpagina']=$fila['idpagina'];
 $_SESSION['plantilla']=$fila['plantilla'];
 $_SESSION['destino']=$pagina;
 if(is_null($fila['contenido']))
 {
     $contenido='';
 }
 else
 {
     $contenido=html_entity_decode($fila['contenido'],ENT_QUOTES,'UTF-8');
 }
 
 $fp=fopen('plantillas/'.$_SESSION['plantilla'].'a','r');
 $html=fread($fp,filesize('plantillas/'.$_SESSION['plantilla'].'a'));
 
 $html=preg_replace('/--Contenido--/',$contenido,$html);
 $html=preg_replace('/--Menu--/',hacerMenu(),$html);
 
 echo $html;
 
 
}

function hacerMenu()
{
  global $mysqli;
  $sql="select nombre from pagina where estado='A'";
  $resultado = $mysqli->query($sql);
  $menu ="<div class='list-group'>";
  while($fila = $resultado->fetch_assoc())
  {
     $menu.="<a href='".$fila['nombre']."' class='list-group-item'>".$fila['nombre']."</a>";
  
  }
  $menu.="</div>";
  return $menu;
}


function guardar_pagina()
{
 global $mysqli;
 $contenido = rawurldecode($_REQUEST['codigo']);
 $sql="update pagina set contenido='".htmlentities($contenido,ENT_QUOTES,"UTF-8")."' where idpagina=".$_SESSION['idpagina'];
 $mysqli->query($sql);
 
 $fpin = fopen('plantillas/'.$_SESSION['plantilla'],'r');
 $html = fread($fpin,filesize('plantillas/'.$_SESSION['plantilla']));
 fclose($fpin);
 
 $html=preg_replace('/--contenido--/',$contenido,$html);
 $html=preg_replace('/--Menu--/',hacerMenu(),$html);
 
 $fpout = fopen('../'.$_SESSION['destino'],'w');
 fwrite($fpout,$html);
 fclose($fpout);
 
 echo "Página guardada correctamente!";
 
}

?>
