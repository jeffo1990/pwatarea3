<?php
session_start();
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;
?>