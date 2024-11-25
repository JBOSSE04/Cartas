<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// saneamiento y validación de los campos del formulario

$errores = [];

// saneamiento y validación del nombre
if (isset($_POST['nombre'])) {
    $nombre = trim($_POST['nombre']);
    $nombre = filter_var($nombre,'FILTER_SANITIZE_STRING');
    if (empty($nombre)) {
        $errores['nombre'] = "El nombre es obligatorio.";
    }
} else {
    $errores['nombre'] = "El nombre es obligatorio.";
}

// saneamiento y validación de los apellidos
if (isset($_POST['apellidos'])) {
    $apellidos = trim($_POST['apellidos']);
    $apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
    if (empty($apellidos)) {
        $errores['apellidos'] = "Los apellidos son obligatorios.";
    }
} else {            
    $errores['apellidos'] = "Los apellidos son obligatorios";
}

// saneamiento y validación del email
if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "El email no es válido.";
    }
} else {
    $errores['email'] = "El email es requerido.";
}

// saneamiento y validación del teléfono
if (isset($_POST['telefono'])) {
    $telefono = trim($_POST['telefono']);
    // permitimos solo números, espacios y signos de puntuación válidos
    $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
    if (empty($telefono)) {
        $errores['telefono'] = "El teléfono es requerido.";
    } elseif (!preg_match("/^[0-9]+$/", $telefono)) {
        $errores['telefono'] = "El teléfono tiene9 dígitos.";
    }
} else {
    $errores['telefono'] = "El teléfono es requerido.";
}

// validación del empleo actual (radio button)
if (isset($_POST['empleo_actual'])) {
    $empleo_actual = $_POST['empleo_actual'];
    $empleos_permitidos = ['sin empleo', 'media jornada', 'tiempo completo'];
    if (!in_array($empleo_actual, $empleos_permitidos)) {
        $errores['empleo_actual'] = "El valor del empleo actual no es válido.";
    }
} else {
    $errores['empleo_actual'] = "El empleo actual es requerido.";
}

// validación de los lenguajes que domina (checkboxes)
if (isset($_POST['lenguajes'])) {
    $lenguajes = $_POST['lenguajes'];
    $lenguajes_permitidos = ['Python', 'PHP', 'JavaScript', 'Java', 'C++'];
    
    // comprobar que cada valor seleccionado sea permitido
    foreach ($lenguajes as $lenguaje) {
        if (!in_array($lenguaje, $lenguajes_permitidos)) {
            $errores['lenguajes'] = "Uno o más lenguajes seleccionados no son válidos.";
            break;
        }
    }
} else {
    $errores['lenguajes'] = "Debes seleccionar al menos un lenguaje.";
}

// saneamiento y validación de la URL de los trabajos realizados
if (isset($_POST['url_trabajos'])) {
    $url_trabajos = trim($_POST['url_trabajos']);
    $url_trabajos = filter_var($url_trabajos, FILTER_SANITIZE_URL);
    if (!filter_var($url_trabajos, FILTER_VALIDATE_URL)) {
        $errores['url_trabajos'] = "La URL proporcionada no es válida.";
    }
} else {
    $errores['url_trabajos'] = "La URL de trabajos es requerida.";
}

// Comprobamos si hay errores
if (empty($errores)) {
    echo "<h1>Los datos son válidos.</h1>";
} else {
    // Mostrar errores
    foreach ($errores as $campo => $mensaje) {
        echo "Error en $campo: $mensaje<br>";
    }
}
?>

</body>
</html>