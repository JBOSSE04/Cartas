<?php
$idiomas = array(
    'es' => 'Español',
    'en' => 'English',
    'fr' => 'Français',
    'de' => 'Deutsch',
    'it' => 'Italiano',
    'pt' => 'Português',
    'ru' => 'Русский'

);

if (isset($_POST['idioma']) && array_key_exists($_POST['idioma'], $idiomas)) {
    $idioma_seleccionado = $_POST['idioma'];
    // Guardamos la selección en una cookie que dura 30 días
    setcookie('idioma_preferido', $idioma_seleccionado, time() + (86400 * 30), "/");
} elseif (isset($_COOKIE['idioma_preferido']) && array_key_exists($_COOKIE['idioma_preferido'], $idiomas)) {
    // Si no se ha enviado un nuevo idioma, usamos el guardado en la cookie
    $idioma_seleccionado = $_COOKIE['idioma_preferido'];
} else {
    // Si no hay cookie, usamos un idioma por defecto
    $idioma_seleccionado = 'es';
}

// Función para cargar el contenido en el idioma seleccionado
function cargar_contenido($idioma) {
    // Aquí cargarías el contenido según el idioma seleccionado
    // Por ejemplo, podrías tener archivos de idioma separados
    switch ($idioma) {
        case 'en':
            return "Welcome to our website!";
            break;    
        case 'fr':
            return "Bienvenue sur notre site web!";
            break;
        case 'de':
            return "Willkommen auf unserer Website!";
            break;
        case 'it':
            return "Benvenuto sul nostro sito web!";
            break;
        case 'pt':
            return "Bem-vindo ao nosso site web!";
            break;
        case 'ru':
            return "Добро пожаловать на наш веб-сайт!";
            break;
        default:
            return "Bienvenido a nuestra página web!";
    }


}




?>

<!DOCTYPE html>
<html lang="<?php echo $idioma_seleccionado; ?>">
<head>
    <meta charset="UTF-8">
    <title>Selector de Idioma</title>
</head>
<body>
    <h1><?php echo cargar_contenido($idioma_seleccionado); ?></h1>

    <form action="" method="post">
        <label for="idioma">Selecciona tu idioma:</label>
        <select name="idioma" id="idioma">
            <?php foreach ($idiomas as $codigo => $nombre): ?>
                <option value="<?php echo $codigo; ?>" <?php echo ($codigo == $idioma_seleccionado) ? 'selected' : ''; ?>>
                    <?php echo $nombre; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Cambiar idioma">
    </form>
</body>
</html>