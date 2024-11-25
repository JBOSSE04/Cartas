<?php
namespace Controllers;

use Models\Barajaes;
use Lib\Pages;

class BarajaController {
    public function menu() {
        $page = new Pages();
        $page->render('menu');
    }

    public function mostrarCartas() {
        $baraja = new Barajaes();
        $cartas = $baraja->getCartas();
        $page = new Pages();
        $page->render('mostrarCartas', ['cartas' => $cartas]);
    }

    public function mostrarUnaCarta() {
        $baraja = new Barajaes();
        $carta = $baraja->sacarUnaCarta();
        $page = new Pages();
        $page->render('mostrarUnaCarta', ['carta' => $carta]);
    }

    public function barajarYMostrar() {
        $baraja = new Barajaes();
        $cartas = $baraja->barajar();
        $page = new Pages();
        $page->render('barajarYMostrar', ['cartas' => $cartas]);
    }

    public function repartirCartas() {
        $jugadores = $_GET['jugadores'] ?? 4; // Número de jugadores por defecto
        $baraja = new Barajaes();
        $reparto = $baraja->repartir($jugadores, 3); // Cada jugador recibe 3 cartas
        $page = new Pages();
        $page->render('repartirCartas', ['reparto' => $reparto]);
    }
}
?>
