<?php
$usuario="hernancely";
$pas="";
$db="c9";
$host="127.0.0.1";
$conexion = mysql_connect($host, $usuario, $pas, $db);
$query = "SELECT nombre_est, YEAR(CURDATE())-YEAR(fecha_nac) AS edad FROM ESTUDIANTE;";

mysql_select_db("c9",$conexion);
	$result = mysql_query($query,$conexion);
if ($conexion->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$conexion->connect_error);
} else {
}
?>

<html>
    <body>
        <table border="1px">
    <tr>
       <th>Nombre_est</th>
       <th>edad</th>
    </tr>
    </body>

<?php
	
if (mysql_num_rows($result)!=0) {
    while($fila=mysql_fetch_row($result)){
        
        echo "<tr>";
        echo "<td>".$fila[0]."</td>";
        echo "<td>".$fila[1]."</td>";
        echo "</tr>";
        
    }
}
else {
   echo 'mala idea'; 
}
 
?>
        </<table>
</html>