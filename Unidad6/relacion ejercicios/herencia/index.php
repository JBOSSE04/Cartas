<?php
require_once 'caballo.php';
require_once 'oveja.php';

try {
    // Creación de los objetos
    $caballo = new Caballo("caballin", 7, "Mustang");
    $oveja = new Oveja("ovejin", 4, "blanca");

    // Almacenamos las propiedades en variables
    $caballo_nombre = $caballo->get_nombre();
    $caballo_edad = $caballo->get_edad();
    $caballo_raza = $caballo->set_raza("Mustang");

    $oveja_nombre = $oveja->get_nombre();
    $oveja_edad = $oveja->get_edad();
    $oveja_tipo_lana = $oveja->set_tipo_lana("blanca");

} catch (Exception $e) {
    echo "Se produjo un error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <style>
    
    </style>
</head>
<body>


<div class="animal">
    <h2>Caballo</h2>
    <p><strong>Nombre:</strong> <?php echo $caballo_nombre; ?></p>
    <p><strong>Edad:</strong> <?php echo $caballo_edad; ?> años</p>
    <p><strong>Raza:</strong> <?php echo $caballo_raza; ?></p>
</div>

<div class="animal">
    <h2>Oveja</h2>
    <p><strong>Nombre:</strong> <?php echo $oveja_nombre; ?></p>
    <p><strong>Edad:</strong> <?php echo $oveja_edad; ?> años</p>
    <p><strong>Tipo de Lana:</strong> <?php echo $oveja_tipo_lana; ?></p>
</div>

</body>
</html>