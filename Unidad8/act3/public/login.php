<?php
session_start();

require_once '../config/config.php';
require_once '../Lib/Database.php';

use Lib\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "El usuario y la contraseña son obligatorios.";
        header("Location: login.php");
        exit;
    }

    try {
        $db = new Database();
        $pdo = $db->getConnection();
        $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE username = :username');
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
            ];
            header("Location: home.php");
            exit;
        } else {
            $_SESSION['error'] = "Usuario o contraseña incorrectos.";
            header("Location: login.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error en la conexión: " . $e->getMessage();
        header("Location: login.php");
        exit;
    }
}
?>

<?php include('header.php'); ?>

<h2>Iniciar sesión</h2>

<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red;"><?= $_SESSION['error'] ?></p>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<form action="" method="POST">
    <label for="username">Usuario:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Iniciar sesión</button>
</form>

<?php include('footer.php'); ?>
