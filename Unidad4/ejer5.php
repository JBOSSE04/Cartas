<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Función que genera un grupo de animales al azar
function generarGrupoAnimales($min, $max) {
    $numAnimales = rand($min, $max);
    
    // Rango Unicode para los animales (128000 a 128060)
    $rangoUnicodeInicio = 128000;
    $rangoUnicodeFin = 128060;
    
    // Array donde se guardan los códigos de los animales
    $grupoAnimales = [];
    
    // Rellenar el array con animales aleatorios (usando el rango Unicode)
    for ($i = 0; $i < $numAnimales; $i++) {
        $codigoAnimal = rand($rangoUnicodeInicio, $rangoUnicodeFin);
        $grupoAnimales[] = "&#$codigoAnimal;";
    }
    
    return $grupoAnimales;
}


// Función que muestra el grupo de animales
function mostrarGrupo($grupoAnimales) {
    foreach ($grupoAnimales as $animal) {
        echo $animal . " ";
    }
    echo "<br>";
}

// Función que selecciona un animal al azar y lo elimina del grupo
function eliminarAnimalAlAzar(&$grupoAnimales) {
    // Seleccionar un animal al azar
    $indiceAnimalAzar = array_rand($grupoAnimales);
    $animalEliminado = $grupoAnimales[$indiceAnimalAzar];
    
    // Eliminar el animal seleccionado
    unset($grupoAnimales[$indiceAnimalAzar]);
    
    // Devolver el animal eliminado
    return $animalEliminado;
}

// Función eliminia animales
function eliminarInstanciasAnimal(&$grupoAnimales, $animalAEliminar) {
    foreach ($grupoAnimales as $indice => $animal) {
        if ($animal == $animalAEliminar) {
            unset($grupoAnimales[$indice]);
        }
    }
}

$grupoAnimales = generarGrupoAnimales(20, 30);

mostrarGrupo($grupoAnimales);

$animalEliminado = eliminarAnimalAlAzar($grupoAnimales);

echo "Animal eliminado:  $animalEliminado";

eliminarInstanciasAnimal($grupoAnimales, $animalEliminado);

echo "<br>despues de eliminar<br>";
mostrarGrupo($grupoAnimales);

$totalAnimalesRestantes = count($grupoAnimales);
echo "<br>Total: $totalAnimalesRestantes<br>";
?>

</body>
</html>