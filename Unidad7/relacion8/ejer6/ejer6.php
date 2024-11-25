<?php
// Inicia la sesión
session_start();

// Verifica si el formulario fue enviado
if (isset($_POST['time']) && is_numeric($_POST['time'])) {
    // Obtiene el tiempo en segundos ingresado por el usuario (entre 1 y 60)
    $time = max(1, min(60, intval($_POST['time']))); // Limita el tiempo entre 1 y 60 segundos
    
    // Establece la cookie con el tiempo de vida especificado
    setcookie("custom_cookie", "Este es el valor de la cookie", time() + $time);

    // Almacena el tiempo en la sesión para mostrar en la página
    $_SESSION['time_set'] = $time;
    
    // Redirecciona para evitar reenvío del formulario al refrescar
    header("Location: index.php");
    exit();
}

// Obtiene el valor de la cookie si existe
$cookie_value = isset($_COOKIE['custom_cookie']) ? $_COOKIE['custom_cookie'] : "No establecida";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cookie con Tiempo Personalizado</title>
</head>
<body>

<h2>Establecer el tiempo de vida de la cookie</h2>

<form method="POST" action="">
    <label for="time">Duración de la cookie (en segundos, entre 1 y 60):</label>
    <input type="number" id="time" name="time" min="1" max="60" required>
    <button type="submit">Actualizar Cookie</button>
</form>

<hr>

<h3>Resultado:</h3>

<p><strong>Tiempo de vida de la cookie:</strong> 
    <?php 
        echo isset($_SESSION['time_set']) ? $_SESSION['time_set'] . " segundos" : "No especificado"; 
    ?>
</p>

<p><strong>Valor de la cookie:</strong> 
    <?= htmlspecialchars($cookie_value); ?>
</p>

</body>
</html>
