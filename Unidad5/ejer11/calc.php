<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $error = false;


        $numero1 = filter_var($num1, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $numero2 = filter_var($num2, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        if (empty($num1) || empty($num2)) {

            $error = true;
            
            if ( $num2 == 0){
                echo "<p class='error'>No se puede dividir entre cero.</p>";
            }else{
                echo "<p class='error'>tienes que escribir en los dos campos</p>";
            }
        }

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p class='error'>no son numeros validos.</p>";
            $error = true;
        }

        if (!$error) {
            $num1 = (float)$num1;
            $num2 = (float)$num2;
            $resultado = 0;

            switch ($operacion) {
                case "Sumar":
                    $resultado = $num1 + $num2;
                    break;
                case "Restar":
                    $resultado = $num1 - $num2;
                    break;
                case "Multiplicar":
                    $resultado = $num1 * $num2;
                    break;
                case "Dividir":
                    if (!($num2 == "") && ($num2 != 0)) {
                        $resultado = $num1 / $num2;
                    } 
            }

            echo "<h2>$resultado</h2>";
        }
    }
    ?>

    <h1>Calculadora</h1>
    <form method="post">
        <input type="text" name="num1" placeholder="Número 1">
        <input type="text" name="num2" placeholder="Número 2"><br>
        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Dividir">
    </form>
</body>

</html>