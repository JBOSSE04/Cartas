<?php 
namespace Unidad8\Agenda\models;

use Lib\BaseDatos;
use PDO;
 use PDOException;

 class contacto{
    private BaseDatos $conexion;
    private mixed $stmt;
    function __construct(

        private string|null $id=null,
        private string $nombre='',
        private string $apellido='',
        private string $correo='',
        private string $direccion='',
        private string $telefono='',
        private string $fecha_nacimiento='',
    ){
        $this->conexion = new BaseDatos();
    }


}




?>
