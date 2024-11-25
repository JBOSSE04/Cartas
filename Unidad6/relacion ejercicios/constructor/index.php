<?php
include 'coche.php';

$coche1 = new Coche("Ford", "Focus", "Azul");
$coche2 = new Coche("BMW", "X5", "Negro");

$coche1->acelerar();
$coche1->acelerar();
$coche2->acelerar();

$coche2->frenar();

echo "Coche 1: \n";
echo "Color: " . $coche1->getColor() . "\n";
echo "Marca: " . $coche1->getMarca() . "\n";
echo "Modelo: " . $coche1->getModelo() . "\n";
echo "Velocidad: " . $coche1->getVelocidad() . " km/h\n";
echo "Caballos: " . $coche1->getCaballos() . "\n";
echo "Número de plazas: " . $coche1->getNumPlazas() . "\n\n";

echo "Coche 2: \n";
echo "Color: " . $coche2->getColor() . "\n";
echo "Marca: " . $coche2->getMarca() . "\n";
echo "Modelo: " . $coche2->getModelo() . "\n";
echo "Velocidad: " . $coche2->getVelocidad() . " km/h\n";
echo "Caballos: " . $coche2->getCaballos() . "\n";
echo "Número de plazas: " . $coche2->getNumPlazas() . "\n";
?>