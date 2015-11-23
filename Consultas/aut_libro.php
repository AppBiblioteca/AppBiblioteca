<?php
session_start();
include_once 'Conexion.php';

if(!mysql_select_db("biblioteca", $conexion)) 
    die("Error: No existe la base de datos");
$query = "SELECT * FROM CategoriaLibros";
$result = mysql_query($query,$conexion);

?>

<html>
    <body>
        <table border="1px">
    <tr>
       <th>Id_lector</th>
       <th>Cod_est</th>
       <th>Nom_est</th>
     
    </tr>
    </body>

<?php
	
if (mysql_num_rows($result)!=0) {
    while($fila=mysql_fetch_row($result)){
        
        echo "<tr>";
        echo "<td>".$fila[0]."</td>";
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";

        
    }
}
else {
   echo 'mala idea'; 
}
 
?>
        </<table>
</html>
