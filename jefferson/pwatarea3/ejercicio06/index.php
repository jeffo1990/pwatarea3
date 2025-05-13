<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Ejercicio 6</title>
</head>
<body>
    <h2>Iniciar sesión</h2>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form action="login.php" method="post">
        <label>Usuario: <input type="text" name="usuario" required></label><br><br>
        <label>Contraseña: <input type="password" name="clave" required></label><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
