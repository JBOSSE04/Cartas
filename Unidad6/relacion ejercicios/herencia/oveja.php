<?php
require_once 'animal.php';

class Oveja extends Animal {
    private $tipo_lana;

    public function __construct($nombre, $edad, $tipo_lana) {
        parent::__construct($nombre, $edad);
        $this->set_tipo_lana($tipo_lana);
    }

    public function mostrar_propiedades() {
        echo "La oveja {$this->nombre} tiene {$this->edad} años y su tipo de lana es {$this->tipo_lana}.\n";
    }

    public function set_tipo_lana($tipo_lana) {
        $this->tipo_lana = $tipo_lana;
    }
}
?>