<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Ajedrez</title>
    <style>
        /* Estilos para el tablero */
       table 
       {
            border-collapse: collapse; /* Elimina el espacio entre celdas */
            margin: 20px; /* Margen alrededor del tablero */
        }
        /* Estilos para las celdas del tablero */
        td 
        {
            width: 40px; /* Ancho de cada celda */
            height: 40px; /* Alto de cada celda */
            text-align: center; /* Centra el contenido horizontalmente */
            vertical-align: middle; /* Centra el contenido verticalmente */
            border: 2px solid blue; /* Borde azul alrededor de cada celda */
        }
        /* Clase para celdas blancas */
        .blanco 
        {
            background-color: white;
        }
        /* Clase para celdas grises */
        .gris 
        {
            background-color: lightgray;
        }
        /* Estilos para las imágenes de las piezas */
        img 
        {
            opacity: 1; /* Opacidad completa */
            width: 80%; /* Ancho de la imagen al 80% de la celda */
            height: 80%; /* Alto de la imagen al 80% de la celda */
            margin: 0px; /* Sin margen */
        }
    </style>
</head>
<body>

<?php
// Función para dibujar una celda individual del tablero
function celda($fila, $columna, $pieza) 
{
    // Determina el color de la celda basado en su posición
    $colorClase = (($fila + $columna) % 2 == 0) ? 'gris' : 'blanco';
    
    // Dibuja la celda con la clase de color correspondiente
    echo "<td class='$colorClase'>";
    // Si hay una pieza inserta su imagen
    if ($pieza != "") 
    {
         echo "<img src='fichasAjedrez/$pieza.png' alt='$pieza'>";
    }
    echo "</td>";
}
// Función para dibujar una fila completa
function dibujarFila($fila, $piezasFila) 
{
    echo "<tr>";
    // Dibuja cada celda de la fila
    for ($columna = 0; $columna <= 7; $columna++) {
        celda($fila, $columna, $piezasFila[$columna]);
    }
    echo "</tr>";
}
// Función principal
function tablero() 
{
    // Define las piezas para las filas de negras y blancas
    $piezasNegras = array("torren", "caballon", "alfiln", "reinan", "reyn", "alfiln", "caballon", "torren");
    $piezasBlancas = array("torreb", "caballob", "alfilb", "reinab", "reyb", "alfilb", "caballob", "torreb");
    echo "<table>";
    dibujarFila(0, $piezasNegras);
    dibujarFila(1, array_fill(0, 8, "peon-negro"));

    for ($fila = 2; $fila < 6; $fila++) 
    {
    dibujarFila($fila, array_fill(0, 8, ""));
    }


    dibujarFila(6, array_fill(0, 8, "peon-blanco"));


    dibujarFila(7, $piezasBlancas);

    echo "</table>";
}

// LLAMAMOS LA FUNCION 
tablero();
?>

</body>
</html>