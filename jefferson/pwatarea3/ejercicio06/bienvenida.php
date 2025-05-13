<?php
session_start();
include 'usuario.php';
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
    <p>le damos la bienvenida con el sig email: <?= htmlspecialchars($_SESSION['usuario']) ?></p>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
