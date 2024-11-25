<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $email = $_POST['email'];
    $lenguajes = isset($_POST['lenguajes']) ? implode(", ", $_POST['lenguajes']) : "None";
    $web_static = $_POST['web_static'];
    $comentarios = $_POST['comentarios'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    echo "<h1>Datos recibidos:</h1>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Apellidos: " . htmlspecialchars($apellidos) . "<br>";
    echo "Fecha de nacimiento: " . htmlspecialchars($fecha_nacimiento) . "<br>";
    echo "Correo Electrónico: " . htmlspecialchars($email) . "<br>";
    echo "Lenguajes de programación: " . htmlspecialchars($lenguajes) . "<br>";
    echo "¿Sabes crear páginas web estáticas?: " . htmlspecialchars($web_static) . "<br>";
    echo "Comentarios: " . nl2br(htmlspecialchars($comentarios)) . "<br>";
    

    if ($password === $re_password) {
        echo "Las contraseñas coinciden.<br>";
    } else {
        echo "Las contraseñas no coinciden.<br>";
    }
}
?>
