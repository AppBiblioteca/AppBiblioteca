<?php
session_start();

$usuario="hernancely";
$pas="";
$db="c9";
$host="127.0.0.1";
$conexion = mysql_connect($host, $usuario, $pas, $db);
if ($conexion->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$conexion->connect_error);
} else {
}


function verificar_login($username,$password,$result) {
    
   
    $sql = "SELECT * FROM ESTUDIANTE WHERE nombre_est = '.$username.' and cod_est = '.$password.'";
     
mysql_select_db("c9",$conexion);
    $rec = mysql_query($sql,$conexion);

    $count = 0;

 

    while($row = mysql_fetch_row($rec))

    {
echo "<td>".$row[0]."</td>";
        $count++;

        $result = $row;

    }

 

    if($count == 1)

    {

        return 1;

    }

 

    else

    {

        return 0;

    }

}

 

if(!isset($_SESSION['user']))

{

    if(isset($_POST['login']))

    {

        if(verificar_login($_POST['username'],$_POST['password'],$result) == 1)

        {

            $_SESSION['user'] = $_POST['username'];
			 
            header("location: html/index.html.php");

        }

        else

        {

            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';

        }

    }

?>


<style type="text/css">


h1{
	color: white;
	margin-top:50px;
}
#navegador ul{
   list-style-type: none;
   text-align: center;
   margin: 80px 0 0 0;
}
#navegador li{
   display: inline;
   text-align: center;
   margin: 0 0 0 0;
}
#navegador li a {
   padding: 5px 40px;
   color: #666;
   background-color: #eeeeee;
   border: 1px solid #ccc;
   text-decoration: none;
}
form.login {

    background: none repeat scroll 0 0 #F1F1F1;

    border: 1px solid #DDDDDD;

    font-family: sans-serif;

    margin: 80 auto;

    padding: 20px;

    width: 278px;

    box-shadow:0px 0px 20px black;

    border-radius:10px;

}

form.login div {

    margin-bottom: 15px;

    overflow: hidden;

}

form.login div label {

    display: block;

    float: left;

    line-height: 25px;

}

form.login div input[type="text"], form.login div input[type="password"] {

    border: 1px solid #DCDCDC;

    float: right;

    padding: 4px;

}

form.login div input[type="submit"] {

    background: none repeat scroll 0 0 #DEDEDE;

    border: 1px solid #C6C6C6;

    float: right;

    font-weight: bold;

    padding: 4px 20px;

}

.error{

    color: red;

    font-weight: bold;

    margin-top: 200px;

    text-align: center;

}


html {
    background: url(Imagenes/fondo.jpg) no-repeat fixed center;
	
    -webkit-background-size: cover;
    
	-moz-background-size: cover;
    
	-o-background-size: cover;
    
	background-size: cover;
}

</style>

 

<form action="" method="post" class="login">

    <div><label>Usuario</label><input name="username" type="text" placeholder="Ingrese su Usuario"  ></div>

    <div><label>Password</label><input name="password" type="password" placeholder="Ingrese su Contraseña"></div>

    <div><input name="login" type="submit" value="Ingresar" ></div>

</form>

<?php

} else {

    echo 'Su usuario ingreso correctamente.';
    echo '<a href="html/index.html">Logout</a>';

}

?>