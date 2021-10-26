<?php 
$host="localhost";
$user="root";
$password="";
$db="landing";

$conexion = new mysqli($host,$user,$password,$db);

if ($conexion) {
    echo 'Conectado satisfactoriamente';
}else {
    die('No pudo conectarse: ' . mysqli_error($conexion));
}

mysqli_select_db($conexion, $db);

?>