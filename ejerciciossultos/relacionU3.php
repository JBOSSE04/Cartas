<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
//6
<form action="relacionU3.php" method="post">
        <label for="numero1">Ingresa el primer número:</label>
        <input type="number" name="numero1" id="numero1" required>
        <label for="numero2">Ingresa el segundo número:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br><br>
        
        <input type="submit" value="Calcular MCD">
    </form> -->

<!--//7 -->

<!-- <h3>Comprobar si un Número es Primo</h3>
    <form method="post">
        <label for="numero">Ingresa un número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        
        <input type="submit" value="Comprobar">
    </form>





// //1
// function factorial($n) {
//     if ($n == 0) {
//         return 1; // base case: 0! = 1
//     } else {
//         return $n * factorial($n - 1); // recursive call
//     }
// }
// echo factorial(5); 
// echo "<br>";
// echo factorial(3); 
// echo "<br>";
// echo factorial(0); 


//2 

// function suma($numero1, $numero2) {
//     return $numero1 + $numero2;
// }

// function resta($numero1, $numero2) {
//     return $numero1 - $numero2;
// }

// function multiplicacion($numero1, $numero2) {
//     return $numero1 * $numero2;
// }

// function division($numero1, $numero2) {
//     if ($numero2 == 0) {
//         throw new InvalidArgumentException('No se puede dividir entre cero!');
//     }
//     return $numero1 / $numero2;
// }

// function calculadora($numero1, $numero2, $operacion) {
//     switch ($operacion) {
//         case '+':
//             return suma($numero1, $numero2);
//         case '-':
//             return resta($numero1, $numero2);
//         case '*':
//             return multiplicacion($numero1, $numero2);
//         case '/':
//             return division($numero1, $numero2);
//         default:
//             throw new InvalidArgumentException('Operación inválida!');
//     }
// }

// if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operacion'])) {
//     $numero1 = (float) $_GET['numero1'];
//     $numero2 = (float) $_GET['numero2'];
//     $operacion = $_GET['operacion'];
//     $resultado = calculadora($numero1, $numero2, $operacion);
//     echo "Resultado: $resultado";


// }


//3
// function procesarArgumento($argumento) {
//     if (is_string($argumento)) {
//         if (empty($argumento)) {
//             echo "Este es el relleno porque estaba vacía";
//         } else {
//             echo strtoupper($argumento);
//         }
//     } else {
//         echo $argumento . " no es una cadena de caracteres";
//     }
// }


//4
// // Definir la función para calcular potencias
// function calcular_potencia($base, $exponente) {
//     return pow($base, $exponente);
// }

// // Ejemplos de uso:
// echo calcular_potencia(2, 3);    








//5


// function obtener_fecha_castellano($zona_horaria = 'Europe/Madrid', $idioma = 'ES.UTF-8') {
//     date_default_timezone_set($zona_horaria);
//     setlocale(LC_TIME, $idioma);
//     $fecha = strftime("%A, %d de %B de %Y");
//     return $fecha;
// }
    
// echo '<h1>' . obtener_fecha_castellano() . '</h1>';

//6 

// Función para calcular el MCD utilizando el algoritmo de Euclides


// function calcular_mcd($a, $b) {
//     while ($b != 0) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }
//     return $a;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $numero1 = intval($_POST['numero1']);
//     $numero2 = intval($_POST['numero2']);
    
//     $mcd = calcular_mcd($numero1, $numero2);
    
//     echo "<h1>El MCD de $numero1 y $numero2 es: $mcd</h1>";
// }


function es_primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);
    $resultado = es_primo($numero) ? "$numero es primo" : "$numero no es primo";
    echo "<h2>$resultado</h2>";
}





?>







</body>
</html>