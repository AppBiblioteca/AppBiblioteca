<?php
$usuario="hernancely";
$pas="";
$db="c9";
$host="127.0.0.1";
$conexion = mysql_connect($host, $usuario, $pas, $db);
if ($conexion->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$conexion->connect_error);
} else {
}

$usua = $_POST['correo'];
$pass = $_POST['pass'];

$sql1 ="SELECT * FROM ESTUDIANTE WHERE nombre_est = '".$usua."' AND cod_est = '".$pass."'";
$resultado =mysql_query($sql1,$conexion);

if (mysql_num_rows($resultado)>0) {

	while ($registro = mysql_fetch_array($resultado)){
	$User= $registro['Usuario'];
	$_SESSION['Userdb']= $nombre;
	header ('location:html/index.html');
	}
	
}else{
	echo "Datos Incorrectos, Verifique";
}

?>