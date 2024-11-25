<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if ($usuario === "usuario" && $contrasena === "1234") {
        header("Location: bien.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}

ob_end_flush();
?>