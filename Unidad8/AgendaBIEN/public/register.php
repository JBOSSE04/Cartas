<?php
require_once '../config/config.php';
require_once '../Lib/Database.php';

use Lib\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "El usuario y la contraseña son obligatorios.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        try {
            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare('INSERT INTO usuarios (username, password) VALUES (:username, :password)');
            $stmt->execute([
                ':username' => $username,
                ':password' => $hashedPassword,
            ]);
            echo "Usuario registrado con éxito.";
        } catch (PDOException $e) {
            echo "Error al registrar el usuario: " . $e->getMessage();
        }
    }
}

include('header.php');
?>

<h2>Registrar usuario</h2>

<form action="" method="post">
    <label for="username">Usuario:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Registrar</button>
</form>

<?php include('footer.php'); ?>
