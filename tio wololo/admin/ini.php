<?php 
	session_start();

	//Validamos que exista la variable de sesion 'logueado'
	if(empty($_SESSION['logueado']))
	{
		//Colocamos el código html necesario para mostrar una imagen de error de autorización y un botón para regresar al inicio (formulario de ingreso)
	echo "<!DOCTYPE html>
     <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
   
     <title>Usuario no autorizado</title>
     <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet'>
     </head>
     <body style='text-align:center;padding:200px;'>
        <img src='img/403.jpg'><br><br>
        <button class='btn btn-danger btn-lg' onclick=\"location.href='index.html'\"> Regresar</button>
     </body>
     </html>";
	}
	else
	{
		$op = (empty($_REQUEST['op'])) ? '' : $_REQUEST['op']; //Con esto evaluamos si viene algún parametro por metodo GET o POST

		//Llamamos la función plantilla
		plantilla();
		echo $_SESSION['plantilla']; //Colocamos en una variable de sesion el valor asignado a la variable

		//Colocamos la condicion para evaluar la salida del cms
		if($op=="salir")
		{
			//Destruimos la session
			session_destroy();
			//Redireccionamos al index
			header("Location:index.html");
		}
	}

	function plantilla()
	{
		$archivo = fopen('plantillas/cmsa.html','r'); //Abrimos el archivo de la plantilla en modo de lectura
		$html = fread($archivo,filesize('plantillas/cmsa.html')); //asignamos a la variable html el archivo leido anteriormente
		fclose($archivo); //Cerramos el archivo de la plantilla
		$html=preg_replace('/--nombre--/', $_SESSION['nombre'], $html); //Reemplazamos los tags de sustitucion de nuestra plantilla
		$_SESSION['plantilla']=$html; //Colocamos en una variable de sesion el valor de nuestra variable html
	}
 ?>