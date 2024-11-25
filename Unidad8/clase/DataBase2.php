<?php
namespace lib;
use Mysqli;

class DataBase{
private Mysqli $conexion;

public function __construct(
    private string $servidor,
    private string $usuario,
    private string $pass,
    private string $basededatos

)
{
    $this->conexion = $this->conectar();    
}
private function conectar():Mysqli{

    $conexion =new Mysqli($this->servidor, $this->usuario, $this->pass, $this-> basededatos);
    if ($conexion->connect_error)
    {
        die("Error de conexión: " . $conexion->connect_error);
        }
        return $conexion;
}

}

?>