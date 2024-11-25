<?php
// Establecer cabeceras para evitar el almacenamiento en caché
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proteger contra caché

// Establecer la cabecera para refrescar la página
header("Refresh: 1"); // Refrescar cada 10 segundos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página con Refresco Automático</title>
</head>
<body>
    
    <h1>Última actualización: <?php echo date("Y-m-d H:i:s"); ?></h1>
</body>
</html>