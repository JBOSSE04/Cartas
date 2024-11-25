<?php
namespace Models;

class Carta {
    private $palo;
    private $valor;
    private $imagen;

    public function __construct($palo, $valor, $imagen) {
        $this->palo = $palo;
        $this->valor = $valor;
        $this->imagen = $imagen;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function __toString() {
        return "{$this->valor} de {$this->palo}";
    }
}
?>
