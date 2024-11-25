<?php
require_once '/lib2/clase.php';

$db = new Database();

$db->query("INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)");
$db->bind(':nombre', 'Juan Pérez');
$db->execute();

$db->query("SELECT * FROM usuarios");
$usuarios = $db->resultSet();
foreach ($usuarios as $usuario) {
    echo $usuario['nombre'];
}

$db->close();
?>