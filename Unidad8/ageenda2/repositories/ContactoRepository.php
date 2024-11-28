<?php 
namespace Repositories;
use Lib\BaseDatos;
use Models\Contacto;
use PDO;
use PDOException;

class ContactoRepository{

    private BaseDatos $conexion;
    function __construct(){
        $this->conexion = new BaseDatos();
    }

    public function findAll():?array{
        $this->conexion->consulta("SELECT * FROM contactos");
        return $this->extractAll();
        }

    public function extractAll($id):?array{
        $contactos = [];
        $contactosData = $this->conexion->extraer_todos();
        foreach ($contactosData as $contactoData) {
            $contactos[] = Contacto::fromArray($contactoData);}
        }
        
        return $contactos;

}

?>