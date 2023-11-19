<?php
session_start();

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$conexion = mysqli_connect("localhost", "root", "", "01_calif");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta_usuarios = "SELECT * FROM usuarios WHERE nombre=? AND contrasena=?";
$statement = mysqli_prepare($conexion, $consulta_usuarios);
mysqli_stmt_bind_param($statement, "ss", $nombre, $contrasena);
mysqli_stmt_execute($statement);

$resultado = mysqli_stmt_get_result($statement);
$filas = mysqli_fetch_array($resultado);

// Validación de usuarios
if ($filas) {
    $_SESSION['nombre'] = $nombre;
    
    // Validación de roles
    if ($filas['rol'] == 2) { // Docente
        header("location: Profesor.html");
        exit();
    } elseif ($filas['rol'] == 1) { // Estudiante
        header("location: Estudiante.html");
        exit();
    }
}

include("index.html");
?>
<h1 class="bad">USUARIO NO EXISTE O CONTRASEÑA INCORRECTA</h1>
<?php

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
