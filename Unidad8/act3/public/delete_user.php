<?php
require_once '../config/config.php';
require_once '../Lib/Database.php';

use Lib\Database;

session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['username'] !== 'admin') {
    header("Location: home.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['delete_user_id'];

    try {
        $db = new Database();
        $pdo = $db->getConnection();
        $stmt = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
        $stmt->execute([':id' => $user_id]);
        header("Location: admin.php");
        exit;
    } catch (PDOException $e) {
        die("Error al eliminar usuario: " . $e->getMessage());
    }
}
