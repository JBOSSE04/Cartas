<?php
spl_autoload_register(function ($className) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        die("El archivo para la clase {$className} no se encontro en {$path}.");
    }
});
?>
