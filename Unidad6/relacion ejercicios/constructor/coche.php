<?php
class Coche {
    private string $color;
    private string $marca;
    private string $modelo;
    private int $velocidad;
    private int $caballos;
    private int $numPlazas;

    public function __construct(string $marca, string $modelo, string $color = "Rojo") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = 0; 
        $this->caballos = 100; 
        $this->numPlazas = 5;   
    }

    public function acelerar(): void {
        $this->velocidad += 1;
    }

    public function frenar(): void {
        $this->velocidad -= 1;
        if ($this->velocidad < 0) {
            $this->velocidad = 0; 
        }
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getVelocidad(): int {
        return $this->velocidad;
    }

    public function getCaballos(): int {
        return $this->caballos;
    }

    public function getNumPlazas(): int {
        return $this->numPlazas;
    }
}
?>