<?php
require_once 'lib/baseatos.php'; // Incluimos la clase BaseDatos

use Lib\BaseDatos;

try {
    $db = new BaseDatos();

    $query = "SELECT * FROM usuarios";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $resultados = $stmt->fetchAll();

    foreach ($resultados as $fila) {
        echo "Código: " . $fila['codigo'] . ", Nombre: " . $fila['nombre'] . ", Rol: " . $fila['rol'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error durante la operación: " . $e->getMessage();
}
