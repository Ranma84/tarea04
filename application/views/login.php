<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <!-- Enlaces a tus archivos CSS y JS -->
</head>
<body>

    <h2>Iniciar Sesión</h2>

    <?php echo form_open('auth/login'); ?>

    <label for="username">Nombre de Usuario:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Iniciar Sesión</button>

    <?php echo form_close(); ?>

</body>
</html>