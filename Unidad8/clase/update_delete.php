<?php
require_once 'Database.php';

try {
    // Crear una instancia de la base de datos
    $db = new Database();

    // Actualizar un usuario
    $updateQuery = "UPDATE usuarios SET nombre = :nombre, clave = :clave, rol = :rol WHERE codigo = :codigo";
    $updateStmt = $db->prepare($updateQuery);
    
    // Datos para la actualización
    $updateStmt->bindParam(':nombre', $nuevoNombre);
    $updateStmt->bindParam(':clave', $nuevaClave);
    $updateStmt->bindParam(':rol', $nuevoRol);
    $updateStmt->bindParam(':codigo', $codigo);

    $nuevoNombre = 'ActualizadoNombre';
    $nuevaClave = 'nuevaClave123';
    $nuevoRol = 2;
    $codigo = 1; // Código del usuario a actualizar

    $updateStmt->execute();
    echo "Usuario con código {$codigo} actualizado correctamente.<br>";

    // Eliminar un usuario
    $deleteQuery = "DELETE FROM usuarios WHERE codigo = :codigo";
    $deleteStmt = $db->prepare($deleteQuery);

    // Datos para la eliminación
    $deleteStmt->bindParam(':codigo', $codigoEliminar);
    $codigoEliminar = 3; 

    $deleteStmt->execute();
    echo "Usuario con código {$codigoEliminar} eliminado correctamente.<br>";

    $db->close();

} catch (PDOException $e) {
    echo "Error en la operación: " . $e->getMessage();
}
