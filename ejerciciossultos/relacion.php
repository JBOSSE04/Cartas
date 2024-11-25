<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

//1.-
// Definir las variables
// $pais = "España";       // String
// $habitantes = 12345678; // Entero (población aproximada)
// $continente = "América"; // String

// // Mostrar el valor de cada variable junto con su tipo de dato
// echo "País: $pais (Tipo: " . gettype($pais) . ")" ;
// echo "<br>Habitantes: $habitantes (Tipo: " . gettype($habitantes) . ")";
// echo "<br>Continente: $continente (Tipo: " . gettype($continente) . ")";


//2._

// $radio = 5.7;

// $longitud = 2 * pi() * $radio;
// $superficie = 4 * pi() * pow($radio, 2);
// $volumen = (4/3) * pi() * pow($radio, 3);

// echo "<h3>Resultados usando round():</h3>";
// echo "<br>Longitud: " . round($longitud, 2) . " unidades\n";
// echo "<br>Superficie: " . round($superficie, 2) . " unidades cuadradas\n";
// echo "<br>Volumen: " . round($volumen, 2) . " unidades cúbicas\n";
// echo "<br>";

// echo "<br><h3>Resultados usando printf():</h3>";
// printf("<br>Longitud: %.2f unidades\n", $longitud);
// printf("<br>Superficie: %.2f unidades cuadradas\n", $superficie);
// printf("<br>Volumen: %.2f unidades cúbicas\n", $volumen);

//3

// Definir los coeficientes de la ecuación cuadrática
// $a = 12;
// $b = 5;
// $c = -45;

// $discriminante = pow($b, 2) - 4 * $a * $c;


// if ($discriminante < 0) {
//     echo "La ecuación no tiene soluciones reales.\n";
// } else {

//     $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
//     $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

//     echo "Resultados";
//     echo "x1 = ". round($x1, 2). "\n";
//     echo "x2 = ". round($x2, 2). "\n";

    
// }


//4


// $euros = 100; 

// $cambio = 1.11;

// $dolares = $euros * $cambio;

// echo "$euros euros son  $dolares dólares.";

// printf("%f € son %f $",$euros,$dolares);


//5
// $hoy = date("d-m-Y"); 

// $ayer = date("d-m-Y", strtotime("-1 day"));

// $mañana = date("d-m-Y", strtotime("+1 day"));

// echo "Fecha de hoy: $hoy<br>";
// echo "Fecha de ayer: $ayer<br>";
// echo "Fecha de mañana: $mañana<br>";

//6


// $cadena = "España";
// $pFinal = "";
//     $s = strlen($cadena);
//     $p = mb_strlen($cadena, 'UTF-8');

//     for ( $i = $p-1; $i >= 0; $i--){
//         $utf = mb_substr($cadena,$i,1, 'UTF-8');
//         $pFinal .= $utf;
//     }
//     echo($pFinal);




//  7 

// function piramide() {
//     $altura = 5;  
    
//     for ($i = 0; $i < $altura; $i++) {
//          echo str_repeat("&nbsp;", $altura - $i - 1);
        
//          echo str_repeat("*", 2 * $i + 1);
        
//          echo "<br>";
//     }
// }

// piramide();

// 8

// function piramideHueca() {
//     $altura = 5; 
    
//     for ($i = 0; $i < $altura; $i++) {
//         echo str_repeat("&nbsp;", $altura - $i -1);
        
//         echo "*";
        
//         if ($i > 0 && $i < $altura - 1) {
//             echo str_repeat("&nbsp;", 2 * $i - 1);
//             echo "*";
//         } elseif ($i == $altura - 1) {
//             echo str_repeat("*", 1 * $i);
//         }
        
//         echo "<br>";
//     }
// }

// piramideHueca();

// 9


// function Numeros() {
//     $numeros = [
//         1 => ['one', 'uno'],
//         2 => ['two', 'dos'],
//         3 => ['three', 'tres'],
//         4 => ['four', 'cuatro'],
//         5 => ['five', 'cinco'],
//         6 => ['six', 'seis'],
//         7 => ['seven', 'siete'],
//         8 => ['eight', 'ocho'],
//         9 => ['nine', 'nueve'],
//         10 => ['ten', 'diez']
//     ];
//     echo "<table border='2000' >";
//     echo "<tr><th>Inglés</th><th>Español</th></tr>";
//     foreach ($numeros as $numero => $nombre) {
//         echo "<tr><td>{$nombre[0]}</td><td>{$nombre[1]}</td></tr>";
//     }
//     echo "</table>";


// }
// Numeros();
// // 10

// for ($i = 2; $i <= 100; $i += 2) {
//     echo $i . "<br>";
// }

// 11

// $i = 1;
// while ($i <= 40) {
//     echo "El cuadrado de $i es " . ($i * $i) . "<br>";
//     $i++;
// }

// 12

// $dado1 = rand(1, 6);
// $dado2 = rand(1, 6);

// echo "1: $dado1<br>";
// echo "2: $dado2<br>";

// if ($dado1 === $dado2) {
//     echo "valores iguales<br>";
// } else {
//     echo "El mayor es: " . max($dado1, $dado2) . "<br>";
// }

// 13

// echo "<table border='1' cellpadding='5'>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "<tr>";
//     for ($j = 1; $j <= 10; $j++) {
//         echo "<td>{$i} x {$j} = " . ($i * $j) . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// 14 

// echo "<table border='1' cellpadding='5'>";
// echo "<tr><th>Decimal</th><th>Binario</th><th>Octal</th><th>Hexadecimal</th></tr>";

// for ($i = 1; $i <= rand(); $i++) {
//     printf("<tr><td>%d</td><td>%b</td><td>%o</td><td>%X</td></tr>", $i, $i, $i, $i);
// }

// echo "</table>";

//15

// $num1 = isset($_GET['num1']) ? floatval($_GET['num1']) : 9;
// $num2 = isset($_GET['num2']) ? floatval($_GET['num2']) : 5;

// function calcular($a, $b, $operacion) {
//     switch ($operacion) {
//         case 'suma':
//             return $a + $b;
//         case 'resta':
//             return $a - $b;
//         case 'multiplicacion':
//             return $a * $b;
//         case 'division':
//             return $b != 0 ? $a / $b : "No se puede dividir entre 0 ";
//         default:
//             return "Operación no válida";
//     }
// }

// $suma = calcular($num1, $num2, 'suma');
// $resta = calcular($num1, $num2, 'resta');
// $multiplicacion = calcular($num1, $num2, 'multiplicacion');
// $division = calcular($num1, $num2, 'division');

// echo "<h2>Calculadora</h2>";
// echo "Número 1: $num1<br>";
// echo "Número 2: $num2<br><br>";
// echo "Suma: $suma<br>";
// echo "Resta: $resta<br>";
// echo "Multiplicación: $multiplicacion<br>";
// echo "División: $division<br>";


// 17

// $num1 = isset($_GET['num1']) ;
// $num2 = isset($_GET['num2']);

//  if ($num1 > $num2) {
//     $temp = $num1;
//     $num1 = $num2;
//     $num2 = $temp;
// }

//  function obtenerImpares($inicio, $fin) {
//     $impares = [];
//     for ($i = $inicio; $i <= $fin; $i++) {
//         if ($i % 2 != 0) {
//             $impares[] = $i;
//         }
//     }
//     return $impares;
// }

// $numerosImpares = obtenerImpares($num1, $num2);

// echo "<h2>Números Impares</h2>";
// echo "Entre $num1 y $num2:<br>";

// if (empty($numerosImpares)) {
//     echo "No hay números impares en este rango.";
// } else {
//     echo implode(", ", $numerosImpares);
// }


//17
$longitud = $_GET['longitud'];

$longitud = max(10, min(1000, $longitud));

$x1 = 10;
$y1 = 50;
$x2 = $x1 + $longitud;
$y2 = $y1;

$svg = <<<SVG
<svg width="{$x2}" height="100" ">
    <line x1="{$x1}" y1="{$y1}" x2="{$x2}" y2="{$y2}" stroke="black" stroke-width="2"/>
</svg>
SVG;


print $svg;


?>





    
</body>
</html>