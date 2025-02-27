<?php
namespace Lib;

use PDO;
use PDOException;

require_once 'config.php'; 
class BaseDatos extends PDO {
    private mixed $resultado;

    public function __construct(
        private string $tipo_de_base = 'mysql',
        private string $servidor = SERVERNAME,
        private string $usuario = USERNAME,
        private string $pass = PASSWORD,
        private string $base_datos = DATABASE
    ) {
        // Sobreescribo el metodo constructor de la clase PDO
        try {
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            ];
            parent::__construct("{$this->tipo_de_base}:dbname={$this->base_datos};host={$this->servidor}", $this->usuario, $this->pass, $opciones);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }
   
}
