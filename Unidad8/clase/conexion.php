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
$conexion = new PDO("mysql:host=$servername;dbname=$database;charset-utf8mb4", $username, $password);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"<h2>Conexion realizado con exito :p</h2>";
}catch(PDOException $e){
    echo "Imposible conectar Error: " . $e->getMessage();

}
$conexion = null;


try{
    $stmt =$bd->query('SELECT * FROM usuarios');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($stmt->fetshAll() as $row){
        echo $row['nombre'];

    }

}
catch(PDOException $err)
{
    die("Error: ejecutando");
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>