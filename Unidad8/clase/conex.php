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
// Comprobamos la conexión
if (!$conexion) {
die("La conexion ha fallado: " . mysqli_connect_error());
}
echo "<h2>Conexion realizada correctamente</h2>";
/////////////////////////////////////////////////////////////
// $sql = "SELECT * FROM usuarios";
// $query = $conexion->query($sql);

// if (mysqli_num_rows($query) > 0) {
// //obtenemos un array en la consulta
// while ($row = $query->fetch_assoc()) {
// echo "Codigo: ".$row["codigo"]. " , Nombre: ". $row["nombre"] ." ,Rol: ". $row["rol"]."<br>";
// }
// $conexion->close();
// } else {
// echo "No hay registros";

// }


/////////////////////////////

// $sql = "SELECT * FROM usuarios";

// if ($resultado = $conexion->query($sql)) {
// // obtenemos objetos en la consulta
// while ($obj = $resultado->fetch_object()) {
// echo "Codigo: ". $obj->codigo. " , Nombre: ". $obj->nombre . " , Rol:"
// . $obj->rol . "<br>";
// }
// $conexion->close();
// } else {
// echo "No hay registros";
// }








///////////////////////////// INSERTAR ///////////////////////

$sql = "DELETE FROM usuarios WHERE nombre='Jacinto'";
$delete = $conexion->query($sql);

if ($insert) {
echo 'Datos borrados correctamente';
} else {
echo "Error: ".$conexion->connect_error;
}


mysqli_close($conexion);