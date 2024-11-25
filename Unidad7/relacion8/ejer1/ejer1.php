<?php
// Inicializamos la variable del contador
$contador = 1;

// Comprobamos si la cookie ya existe
if(isset($_COOKIE['visitas'])) {
    // Si existe, incrementamos el contador
    $contador = $_COOKIE['visitas'] + 1;
}

// Establecemos la cookie con el nuevo valor
setcookie('visitas', $contador, time() + (86400 * 30), "/"); // La cookie expira en 30 días

// Preparamos el mensaje a mostrar
if($contador == 1) {
    $mensaje = "Bienvenido por primera vez";
} else {
    $mensaje = "Bienvenido por $contador vez";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de Visitas</h1>
    <p><?php echo $mensaje; ?></p>
    
    <p><a href="?borrar=1">Borrar contador</a></p>

    <?php
    // Código para borrar la cookie si se hace clic en el enlace
    if(isset($_GET['borrar'])) {
        setcookie('visitas', '', time() - 3600, "/");
        echo "<p>Contador borrado. <a href=''>Recargar página</a></p>";
    }
    ?>
</body>
</html>