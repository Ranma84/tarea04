<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "01_calif";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error){
    die("Conexión Fallida" . $conexion->connect_error);
} else {
    echo "Conectado";
}
?>