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
    $user_id = $_POST['user_id'];
    $new_username = trim($_POST['new_username']);
    $new_password = password_hash(trim($_POST['new_password']), PASSWORD_BCRYPT);

    try {
        $db = new Database();
        $pdo = $db->getConnection();
        $stmt = $pdo->prepare('UPDATE usuarios SET username = :username, password = :password WHERE id = :id');
        $stmt->execute([
            ':username' => $new_username,
            ':password' => $new_password,
            ':id' => $user_id,
        ]);
        header("Location: admin.php");
        exit;
    } catch (PDOException $e) {
        die("Error al actualizar usuario: " . $e->getMessage());
    }
}
