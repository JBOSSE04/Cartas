<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Iniciamos la sesión o recuperamos la anterior sesión existente
session_start();
// Comprobamos si la variable ya existe
if (isset($_SESSION['visitas']))
$_SESSION['visitas']++;
else
$_SESSION['visitas'] = 0;
?>
<h1>Bienvenido a la página</h1>
<p>Número de visitas: <?php echo $_SESSION['visitas']; ?></p>




</body>
</html>