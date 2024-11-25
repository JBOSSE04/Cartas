<?php 
$servername = "Localhost"; // Nombre/IP del servidor
$database = "empresa"; // Nombre de la BBDD
$username = "root"; // Nombre del usvario
$password = ""; // Contraseña del usuario

// Desactivar toda notificación de error

error_reporting( error_level: 0);
mysqli_report( flags: MYSQLI_REPORT_OFF);

// Creamos La conexiónt
$conexion = mysqli_connect($servername, $username, $password, $database);


try{
    
    $preparada = $bd->prepare("select nombre from usuarios where rol = ?");
    $preparada->bindParam(1,$rol);S
    $rol=2;
    $preparada->execute;
    
    echo"<p><strong>Numero de usuarios con rol". $rol.": </strong>" . $preparada->rowCount()."</p>";
    
    $preparada->setFetchMode(PDO::FETCH_ASSOC);
    while($row = $preparada->fetch()){
        echo"<p><strong>Nombre del usuario: </strong>" . $row['nombre']."</p>";

    }
    while ($row = $preparada->fetch()){
        echo"<p><strong>Nombre del usuario: </strong>" . $row['nombre']."</p>";
        echo "Nombre: " . $row->nombre . "<br>";
        echo "Nombre: " . $row->nombre . "<br>";


}
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conexion = null;





?>
