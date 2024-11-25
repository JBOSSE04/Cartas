<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

//3Escribe un script que rellene un array con valores aleatorios (0,1) y lo muestre. A continuación, calcularemos su complementario y también la mostraremos.

//Por ejemplo:
//1110010100
//0001101011

// function aleatorio($longitud) {
//     $array = [];
//     for ($i = 0; $i < $longitud; $i++) {
//         $array[] = rand(0, 1);
//     }
//     return $array;
// }

// function complementario($array) {
//     $complementario = [];
//     foreach ($array as $valor) {
//         $complementario[] = $valor == 0 ? 1 : 0;
//     }
//     return $complementario;
// }

// function mostrarArray($array) {
//     echo implode('', $array) . "\n";
// }

// $longitudArray = 10;

// $arrayOriginal = aleatorio($longitudArray);

// mostrarArray($arrayOriginal);

// $arrayComplementario = complementario($arrayOriginal);

// echo "<br>";
// mostrarArray($arrayComplementario);

$arrayOriginal = [];
$arrayOriginal = 

//4 



$arrayOriginal = [];
$arrayCuadrados = [];
$arrayCubos = [];

// 
for ($i = 0; $i < 20; $i++) {
    $valor = rand(0, 100);
    $arrayOriginal[] = $valor;
    $arrayCuadrados[] = $valor * $valor;
    $arrayCubos[] = $valor * $valor *$valor;
}
echo "<table border='1'";
echo "<tr><th>Valor</th><th>Cuadrado</th><th>Cubo</th></tr>";
for ($i = 0; $i < 20; $i++) {
    echo "<tr>";
    echo "<td>{$arrayOriginal[$i]}</td>";
    echo "<td>{$arrayCuadrados[$i]}</td>";
    echo "<td>{$arrayCubos[$i]}</td>";
    echo "</tr>";
}
echo "</table>";





?>
</body>
</html>