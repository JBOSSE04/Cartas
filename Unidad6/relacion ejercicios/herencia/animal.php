<?php
class Animal {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->set_nombre($nombre);
        $this->set_edad($edad);
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function get_edad() {
        return $this->edad;
    }

    public function set_nombre($nombre) {
        if (is_string($nombre) && strlen($nombre) <= 21) {
            $this->nombre = $nombre;
            return true;
        } else {
            echo "Error: El nombre debe ser una cadena de caracteres y no exceder 21 caracteres.\n";
            return false;
        }
    }

    public function set_edad($edad) {
        if (is_numeric($edad) && $edad >= 0) {
            $this->edad = $edad;
            return true;
        } else {
            echo "Error: La edad debe ser un número no negativo.\n";
            return false;
        }
    }
}
?>