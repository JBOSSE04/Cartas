<?php

// Definir los palos y las cartas
$palos = ['oros', 'copas', 'espadas', 'bastos'];
$cartas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

$puntos_cartas = [
    1 => 11,   
    3 => 10,   
    12 => 4,   
    11 => 3,   
    10 => 2,   
    2 => 0, 
    4 => 0, 
    5 => 0, 
    6 => 0, 
    7 => 0, 
    8 => 0, 
    9 => 0 
];

// Función para generar la baraja completa
function generar_baraja($palos, $cartas) {
    $baraja = [];
    foreach ($palos as $palo) {
        foreach ($cartas as $carta) {
            $baraja[] = [$carta, $palo];
        }
    }
    return $baraja;
}

function repartir_cartas(&$baraja, $n) {
    $mano = [];
    for ($i = 0; $i < $n; $i++) {
        $indice = array_rand($baraja);
        $mano[] = $baraja[$indice];
        unset($baraja[$indice]); 
    }
    return $mano;
}

function calcular_puntos($baza, $puntos_cartas) {
    $total_puntos = 0;
    foreach ($baza as $carta) {
        $total_puntos += $puntos_cartas[$carta[0]];
    }
    return $total_puntos;
}

// Generar baraja y repartir cartas
$baraja = generar_baraja($palos, $cartas);
$mano_jugador = repartir_cartas($baraja, 3);

// Simular una baza de 10 cartas
$baza_jugador = repartir_cartas($baraja, 10);

// Calcular el total de puntos de la baza
$puntos_totales = calcular_puntos($baza_jugador, $puntos_cartas);

?>
