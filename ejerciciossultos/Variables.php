<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <?php
$entero = 4; 
$numero = 4.5; // tipo coma flotante
$cadena = "cadena"; // tipo cadena de caracteresº
$bool = TRUE; //tipo booleano
/* cambio de tipo de una variable */
$a = 5; // entero
echo gettype($a); // imprime el tipo de dato de a
echo "<br>";
$a = "Hola"; // cambia a cadena
echo gettype($a); // se comprueba que ha cambiado
    ?> -->
<!-- <?php 
$a = 5;
echo $a;
$b = $a;
echo 'valor de a:', $a,',valor de $b';
$c=&$a;
echo 'valor de a:', $c;
echo 'valor de a:', $a,',valor de ',$b,', valor de ',$c ;
$a = 8;
echo 'valor de a:', $a,',valor de ',$b,', valor de ',$c ;

?> -->
<!-- 
<?php 

$varl = 100;
$var3 = 100 + $var2;//Svar2 no existe, se toma como 0
echo "$var3 <br>"; // muestra 100
$var3 = 100 * $var2; // Svar2 no existe, se toma como 0
echo "$var3 <br>";

?> -->

<!-- <?php
$a = 'hola';
$$a = 'mundo';
//las dos líneas siguientes producen la misma salida
echo "$a ${$a}";
echo "$a $hola";
?> -->

<?php
$mi_string = 'Puedo construir cadenas de caracteres con comillas
simples';
$mi_string2 = "y tambien puedo usar comillas dobles <br>";
$mi_nombre = "Ana";
echo $mi_string;
echo $mi_string2;
echo 'Debes tener cuidado si quieres incluir variables junto al
texto. ';
echo 'Usando comillas simples NO podre escribir $mi_nombre';
echo "<br>Pero si puedo escribir $mi_nombre si uso las comillas dobles
<br>";
echo "Tambien hay que prestar atencion con las comillas \"dobles\"
dentro de
de otras dobles";
?>
</body>
</html>
