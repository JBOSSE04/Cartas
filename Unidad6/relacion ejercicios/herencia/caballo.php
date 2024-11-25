<?php
require_once 'animal.php';

class Caballo extends Animal {
    private $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->set_raza($raza);
    }

    public function mostrar_propiedades() {
        echo "El caballo {$this->nombre} tiene {$this->edad} años y su raza es {$this->raza}.\n";
    }


    public function set_raza($raza) {
        $this->raza = $raza;
    }
}
?>