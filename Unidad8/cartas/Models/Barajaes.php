<?php
namespace Models;

class Barajaes {
    private $cartas = [];

    public function __construct() {
        $palos = ['bastos', 'oros', 'copas', 'espadas'];
        foreach ($palos as $palo) {
            for ($i = 1; $i <= 12; $i++) {
                $this->cartas[] = [
                    'nombre' => ucfirst(string: $palo) . " $i", 
                    'imagen' => "{$palo}_{$i}.png"     
                ];
            }
        }
    }
//el error que tengo es que las imagenes no aparecen



    public function getCartas() {
        return $this->cartas;
    }

    public function barajar() {
        shuffle($this->cartas);
        return $this->cartas;
    }

    public function sacarUnaCarta() {
        return $this->cartas[array_rand($this->cartas)];
    }

    public function repartir($jugadores, $cartasPorJugador) {
        $reparto = [];
        $cartas = $this->cartas;
        shuffle($cartas);

        for ($i = 0; $i < $jugadores; $i++) {
            $reparto[] = array_splice($cartas, 0, $cartasPorJugador);
        }

        return $reparto;
    }
}
?>
