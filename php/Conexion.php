<?php
session_start();
/*iniciar BD en la terminal con mysql-ctl start*/
/*Ingresar al cliente de mysql   con mysql-ctl cli*/
/* use c9*/
$usuario="hernancely";
$pas="";
$db="biblioteca";
$host="127.0.0.1";
$conexion = mysql_connect($host, $usuario, $pas, $db);
if ($conexion->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$conexion->connect_error);
} else {
    die('CONECTADO')
}

?>