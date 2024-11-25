<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


///////////////////////////////4/////////////////////////////////

function CuadradoyCubos(){
$arrayOriginal = [];
$arrayCuadrados = [];
$arrayCubos = [];

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
}
CuadradoyCubos();
?>

</body>
</html>