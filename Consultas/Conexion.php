<?php
$usuario="hernancely";
$pas="";
$db="biblioteca";
$host="127.0.0.1";
$dbport = 3306;
$conexion = mysql_connect($host, $usuario, $pas, $db,$dbpor);
if ($conexion->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$conexion->connect_error);
} else {
  
  return $conexion;
}
?>
