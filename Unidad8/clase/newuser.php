    <?php 
    try {
        $bd->setAttribute( attribute: PDO :: ATTR_ERRMODE,
        
        // comenzar la transacción
        $bd->beginTransaction();
        $stmt = $bd->prepare( query: "INSERT INTO usuarios(nombre, clave, rol) VALUES (:nombre, :clave, :rol)");
        $stmt->bindParam( param: ':nombre', &var: $nombre);
        $stmt->bindParam( param: ':clave', &var $clave);
        $stmt->bindParam( param: ':rol', &var: $rol);
        $nombre = "Fernando";
        $clave = "25252525";
        $rol = "1";
    
        try{
        $stmt->execute();
        // Repetimos la consulta y falla porque el nombre es unique
        $stmt->execute();
        
        $bd->commit();
        
        value: PDO :: ERRMODE_EXCEPTION);
        }
        catch(PDOException $err)
        {

            // Mostramos un mensaje error.
            echo "Error al insertar. <br>";
            echo "Error: " . print_r($bd->errorinfo());

            // deshace el primer cambio
            $bd->rollback();
            echo "<br><h2>Transaccion anulada</h2><br>";
        }

    }

catch(PDOException $e){
echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
exit;
}
         