<?php
session_start();
include 'usuario.php';

$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

$autenticado = false;

foreach ($usuarios as $item) {
    if ($item['usuario'] === $usuario && $item['clave'] === $clave) {
        $autenticado = true;
        $_SESSION['usuario'] = $usuario;
        break;
    }
}

if ($autenticado) {
    header("Location: bienvenida.php");
} else {
    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
    header("Location: index.php");
}
exit;
