<?php
require_once 'lib/database.php';

if (isset($_GET['producto'])) {
    $db = new Database();
    $conn = $db->getConnection();

    $stmt = $conn->prepare("SELECT tiendas.nombre, stock.unidades FROM stock 
                            JOIN tiendas ON stock.tienda = tiendas.cod 
                            WHERE stock.producto = :producto");
    $stmt->bindParam(':producto', $_GET['producto']);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}