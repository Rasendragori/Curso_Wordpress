<?php
 include_once('config.php');
 
 $mysqli = new mysqli($conf['server'], $conf['userdb'], $conf['pwddb'], $conf['db'], $conf['puerto']);
 if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 }

?>
