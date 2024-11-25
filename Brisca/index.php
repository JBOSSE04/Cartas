<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisca - Reparto de cartas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .carta {
            display: inline-block;
            margin: 10px;
        }
        img {
            width: 100px;
            height: auto;
        }
        .resultado {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Brisca</h1>
    <h2>Mano del Jugador</h2>
    
    <div id="mano-jugador">
        <?php 
        // Incluir el archivo PHP para repartir las cartas y calcular puntos
        include 'cartasfuncionalidad.php';

        foreach ($mano_jugador as $carta) {
            $carta_imagen = $carta[1] . "_" . $carta[0] . ".jpg";  
            echo "<div class='carta'><img src='imagenes/$carta_imagen' alt='{$carta[0]} de {$carta[1]}'></div>";
        }
        ?>
    </div>

    <h2>Baza del Jugador</h2>

    <div id="baza-jugador">
        <?php
        foreach ($baza_jugador as $carta) {
            $carta_imagen = $carta[1] . "_" . $carta[0] . ".jpg";  
            echo "<div class='carta'><img src='imagenes/$carta_imagen' alt='{$carta[0]} de {$carta[1]}'></div>";
        }
        ?>
    </div>

    <div class="resultado">
        <?php
        // Mostrar el total de puntos de la baza del jugador
        echo "Puntos totales en la baza: $puntos_totales";
        ?>
    </div>

</body>
</html>
