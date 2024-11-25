<?php
class Perro {
    private $tamaño;
    private $raza;
    private $color;
    private $nombre;

    public function __construct($tamaño, $raza, $color, $nombre) {
        $this->set_tamaño($tamaño);
        $this->set_raza($raza);
        $this->set_color($color);
        $this->set_nombre($nombre);
    }

    public function mostrar_propiedades() {
        echo "El tamaño del perro es {$this->tamaño}, su color es {$this->color}, su raza es {$this->raza} y su nombre es {$this->nombre}.\n";
    }

    public function speak() {
        echo "{$this->nombre} dice: ¡Guau!\n";
    }

    public function get_color() {
        return $this->color;
    }

    public function get_raza() {
        return $this->raza;
    }

    public function get_tamaño() {
        return $this->tamaño;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function set_raza($raza) {
        $this->raza = $raza;
    }

    public function set_tamaño($tamaño) {
        $this->tamaño = $tamaño;
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
}

// Código para crear los objetos y mostrar sus propiedades
try {
    $labrador = new Perro("Grande", "Labrador", "Amarillo", "Rex");
    $labrador->mostrar_propiedades();
    $labrador->speak();

    // Cambiar el nombre del labrador
    $perro_error_message = $labrador->set_nombre('Luna');
    echo $perro_error_message ? 'Nombre actualizado correctamente' : 'Nombre no modificado';
    echo "\n";

    // Crear un segundo objeto
    $caniche = new Perro("Pequeño", "Caniche", "Blanco", "Mimi");
    $caniche->mostrar_propiedades();
    $caniche->speak();

} catch (Exception $e) {
    echo "Se produjo un error: " . $e->getMessage();
}
?>

