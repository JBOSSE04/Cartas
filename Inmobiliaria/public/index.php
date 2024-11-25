<?php
require_once __DIR__ . '/../src/configuracion/configuracion.php';
require_once __DIR__ . '/../src/funciones/funciones_viviendas.php';
require_once __DIR__ . '/../src/utilidades/ayudantes.php';

$errores = [];
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar datos del formulario
    $errores = validarFormulario($_POST);
    
    // Procesar foto si no hay errores
    if (empty($errores)) {
        $resultadoFoto = procesarFoto($_FILES['foto']);
        if (isset($resultadoFoto['error'])) {
            $errores[] = $resultadoFoto['error'];
        } else {
            // Guardar la vivienda
            if (guardarVivienda($_POST, $resultadoFoto['nombre'])) {
                $mensaje = "Vivienda guardada correctamente";
            } else {
                $errores[] = "Error al guardar la vivienda";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión Inmobiliaria</title>
    <style>
        .error { color: red; }
        .exito { color: green; }
    </style>
</head>
<body>

    <form method="POST" enctype="multipart/form-data">
    <fieldset>
    <legend><h2 style="color: blue;">Insercion de Vivienda</h2></legend>

        <div>

            <label>Tipo de vivienda:</label>
            <select name="tipo" required>
                <option value="">Seleccione...</option>
                <option value="Piso">Piso</option>
                <option value="Adosado">Adosado</option>
                <option value="Chalet">Chalet</option>
                <option value="Casa">Casa</option>
            </select>
        </div>
            
        <div>
            <label>Zona:</label>
            <select name="zona" required>
                <option value="">Seleccione...</option>
                <?php foreach (array_keys($porcentajesBeneficio) as $zona): ?>
                    <option value="<?php echo htmlspecialchars($zona); ?>">
                        <?php echo htmlspecialchars($zona); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label>Dirección:</label>
            <input type="text" name="direccion" required>
        </div>

        <div>
            <label>Número de dormitorios:</label>
            <input type="checkbox" name="dormitorios" value="1"> 1
            <input type="checkbox" name="dormitorios" value="2"> 2
            <input type="checkbox" name="dormitorios" value="3"> 3
            <input type="checkbox" name="dormitorios" value="4"> 4
            <input type="checkbox" name="dormitorios" value="5"> 5
        </div>

        <div>
            <label>Precio:</label>
            <input type="number" name="precio" min="0" required>
        </div>

        <div>
            <label>Tamaño en metros cuadrados:</label>
            <input type="number" name="metros" min="1" required>
        </div>

        <div>
            <label>Extras:</label>
            <input type="checkbox" name="extras[]" value="Piscina"> Piscina
            <input type="checkbox" name="extras[]" value="Jardín"> Jardín
            <input type="checkbox" name="extras[]" value="Garage"> Garage
        </div>

        <div>
            <label>Foto:</label>
            <input type="file" name="foto" accept="image/*">
        </div>

        <div>
            <label>Observaciones:</label>
            <textarea name="observaciones"></textarea>
        </div>

        <div>
            <button type="submit">Guardar Vivienda</button>
        </div>
    </form>
    </fieldset>

    <h2>Última Vivienda Agregada</h2>
    <?php
    $ultimaVivienda = obtenerUltimaVivienda();
    if ($ultimaVivienda) {
        echo "<p><strong>Tipo:</strong> " . htmlspecialchars($ultimaVivienda->tipo) . "</p>";
        echo "<p><strong>Zona:</strong> " . htmlspecialchars($ultimaVivienda->zona) . "</p>";
        echo "<p><strong>Dirección:</strong> " . htmlspecialchars($ultimaVivienda->direccion) . "</p>";
        echo "<p><strong>Dormitorios:</strong> " . htmlspecialchars($ultimaVivienda->dormitorios) . "</p>";
        echo "<p><strong>Precio:</strong> " . htmlspecialchars($ultimaVivienda->precio) . "</p>";
        echo "<p><strong>Tamaño:</strong> " . htmlspecialchars($ultimaVivienda->metros) . " m²</p>";
        echo "<p><strong>Extras:</strong> " . htmlspecialchars($ultimaVivienda->extras) . "</p>";
        echo "<p><strong>Beneficio:</strong> " . htmlspecialchars($ultimaVivienda->beneficio) . " €</p>";
        if (!empty($ultimaVivienda->foto)) {
            echo "<p><strong>Foto:</strong> <a href='fotos/" . htmlspecialchars($ultimaVivienda->foto) . "' target='_blank'>Ver Foto</a></p>";
        }
        echo "<p><strong>Observaciones:</strong> " . htmlspecialchars($ultimaVivienda->observaciones) . "</p>";
    } else {
        echo "<p>No hay viviendas registradas.</p>";
    }
    ?>
</body>
</html>