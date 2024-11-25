<?php
class Database {
    private $host = 'localhost'; // Cambia esto si usas otro host
    private $dbName = 'empresa'; // Nombre de tu base de datos
    private $username = 'root'; // Tu usuario de MySQL
    private $password = ''; // Tu contraseña de MySQL
    private $charset = 'utf8mb4'; // Codificación de caracteres
    private $pdo;
    private $error;
    private $stmt;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            die("Error de conexión: " . $this->error);
        }
    }

    // Método para ejecutar una consulta
    public function query($sql) {
        $this->stmt = $this->pdo->prepare($sql);
    }

    // Método para enlazar parámetros a una consulta
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Método para ejecutar la consulta
    public function execute() {
        return $this->stmt->execute();
    }

    // Método para obtener un solo resultado
    public function single() {
        $this->execute();
        return $this->stmt->fetch();
    }

    // Método para obtener múltiples resultados
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    // Método para obtener el número de filas afectadas
    public function rowCount() {
        return $this->stmt->rowCount();
    }

    // Método para obtener el último ID insertado
    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }

    // Método para cerrar la conexión
    public function close() {
        $this->pdo = null;
    }
}
