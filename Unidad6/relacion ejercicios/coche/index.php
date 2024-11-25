<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
class Coche {
    // Propiedades de la clase
    private $color;
    private $marca;
    private $modelo;
    private $velocidad;
    private $caballos;
    private $numPlazas;

    public function __construct(
    $color = "Rojo", 
    $marca = "Ferrari", 
    $modelo = "Corolla", 
    $velocidad = 300, 
    $caballos = 500, 
    $numPlazas = 2
    ) 
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballos = $caballos;
        $this->numPlazas = $numPlazas;
    }

    public function acelerar() {
        $this->velocidad ++;
    }

    public function frenar() {
        $this->velocidad --;
     
    }

    public function getColor() {
        return $this->color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getCaballos() {
        return $this->caballos;
    }

    public function getNumPlazas() {
        return $this->numPlazas;
    }
}
?>
</body>
</html>