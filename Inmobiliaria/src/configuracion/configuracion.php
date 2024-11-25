<?php
// Configuración general
define('TAMAÑO_MAXIMO_ARCHIVO', 102400); // 100KB en bytes
define('DIRECTORIO_SUBIDAS', __DIR__ . '/../../public/fotos/');
define('ARCHIVO_XML', __DIR__ . '/../../datos/viviendas.xml');

// Array de zonas y porcentajes de beneficio
$porcentajesBeneficio = [
    'Centro' => ['menos100' => 30, 'mas100' => 35],
    'Zaidín' => ['menos100' => 25, 'mas100' => 28],
    'Chana' => ['menos100' => 22, 'mas100' => 25],
    'Albaicín' => ['menos100' => 20, 'mas100' => 35],
    'Sacromonte' => ['menos100' => 22, 'mas100' => 25],
    'Realejo' => ['menos100' => 25, 'mas100' => 28]
];