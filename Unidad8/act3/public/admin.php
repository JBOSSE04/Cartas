<?php
require_once '../config/config.php';
require_once '../Lib/Database.php';
require_once 'header.php';

use Lib\Database;


try {
    $db = new Database();
    $pdo = $db->getConnection();
    $stmt = $pdo->query('SELECT id, username FROM usuarios');
    $usuarios = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error al cargar usuarios: " . $e->getMessage());
}

?>

<h1>Zona Admin</h1>
<h2>Editar Usuario</h2>
<form action="edit_user.php" method="post">
    <label for="user_id">Seleccionar Usuario:</label>
    <select name="user_id" id="user_id">
        <?php foreach ($usuarios as $usuario): ?>
            <option value="<?= $usuario['id'] ?>"><?= $usuario['username'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="new_username">Nuevo Nombre de Usuario:</label>
    <input type="text" name="new_username" id="new_username" required><br>
    <label for="new_password">Nueva Contraseña:</label>
    <input type="password" name="new_password" id="new_password" required><br>
    <button type="submit">Actualizar</button>
</form>

<h2>Borrar Usuario</h2>
<form action="delete_user.php" method="post">
    <label for="delete_user_id">Seleccionar Usuario:</label>
    <select name="delete_user_id" id="delete_user_id">
        <?php foreach ($usuarios as $usuario): ?>
            <option value="<?= $usuario['id'] ?>"><?= $usuario['username'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Eliminar</button>
</form>

<?php require_once 'footer.php'; ?>
