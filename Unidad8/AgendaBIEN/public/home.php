<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];

include('header.php');
?>

<h2>Bienvenido, <?= htmlspecialchars($user['username']) ?>!</h2>
<p>Has iniciado sesión correctamente.</p>
<a href="logout.php">Cerrar sesión</a>

<?php include('footer.php'); ?>
