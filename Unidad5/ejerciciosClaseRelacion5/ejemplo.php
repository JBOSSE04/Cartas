



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
Fichero recibido:
Nombre: <?= $_FILES[ "foto" ][ "name" ]."<br>"?>
Tamaño: <?= $_FILES[ "foto" ][ "size" ]." bytes"."<br>"?>
Temporal: <?= $_FILES[ "foto" ][ "tmp_name" ]."<br>"?>
Tipo: <?= $_FILES[ "foto" ][ "type" ]."<br>"?>
Error: <?= $_FILES[ "foto" ][ "error" ]."<br>"?>

<?php
// comprobando y moviendo a un directorio

if (is_uploaded_file ($_FILES[ "foto" ][ "tmp_name"]) ){
$nombreDirectorio = "img/";
$nombreFichero = $_FILES[ "foto" ][ "name" ];

$nombreCompleto = $nombreDirectorio.$nombreFichero;
if ( is_file($nombreCompleto)) {
$idUnico = time();
$nombreFichero = $idUnico."-".$nombreFichero;

move_uploaded_file ($_FILES["foto"][ "tmp_name"], $nombreDirectorio. $nombreFichero);
}
else
print ("");
}
?>
</body>
</html>