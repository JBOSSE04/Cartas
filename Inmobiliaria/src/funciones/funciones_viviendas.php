<?php
function validarFormulario($datos) {
    $errores = [];
    
    if (empty($datos['tipo'])) $errores[] = "El tipo de vivienda es obligatorio";
    if (empty($datos['zona'])) $errores[] = "La zona es obligatoria";
    if (empty($datos['direccion'])) $errores[] = "La dirección es obligatoria";
    
    if (!is_numeric($datos['precio']) || $datos['precio'] <= 0) {
        $errores[] = "El precio debe ser un número positivo";
    }
    if (!is_numeric($datos['metros']) || $datos['metros'] <= 0) {
        $errores[] = "El tamaño debe ser un número positivo";
    }

    return $errores;
}

function procesarFoto($foto) {
    if ($foto['error'] === UPLOAD_ERR_OK) {
        if ($foto['size'] > TAMAÑO_MAXIMO_ARCHIVO) {
            return ['error' => "La foto no debe exceder los 100KB"];
        }
        
        $nombreFoto = time() . '_' . $foto['name'];
        if (!is_dir(DIRECTORIO_SUBIDAS)) {
            mkdir(DIRECTORIO_SUBIDAS, 0777, true);
        }
        move_uploaded_file($foto['tmp_name'], DIRECTORIO_SUBIDAS . $nombreFoto);
        return ['nombre' => $nombreFoto];
    }
    return ['nombre' => ''];
}

function calcularBeneficio($zona, $metros, $precio) {
    global $porcentajesBeneficio;
    $porcentaje = ($metros <= 100) ? 
        $porcentajesBeneficio[$zona]['menos100'] : 
        $porcentajesBeneficio[$zona]['mas100'];
    return ($precio * $porcentaje) / 100;
}

function guardarVivienda($datos, $nombreFoto) {
    if (file_exists("/../../datos/viviendas.xml")) {
        $xml = simplexml_load_file("/../../datos/viviendas.xml");
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><viviendas></viviendas>');
    }

    $beneficio = calcularBeneficio($datos['zona'], $datos['metros'], $datos['precio']);
    
    $vivienda = $xml->addChild('vivienda');
    $vivienda->addChild('tipo', $datos['tipo']);
    $vivienda->addChild('zona', $datos['zona']);
    $vivienda->addChild('direccion', $datos['direccion']);
    $vivienda->addChild('dormitorios', $datos['dormitorios']);
    $vivienda->addChild('precio', $datos['precio']);
    $vivienda->addChild('metros', $datos['metros']);
    $vivienda->addChild('extras', implode(',', isset($datos['extras']) ? $datos['extras'] : []));
    $vivienda->addChild('foto', $nombreFoto);
    $vivienda->addChild('observaciones', $datos['observaciones']);
    $vivienda->addChild('beneficio', $beneficio);

    return $xml->asXML(ARCHIVO_XML);
}

function obtenerUltimaVivienda() {
    if (file_exists(ARCHIVO_XML)) {
        $xml = simplexml_load_file(ARCHIVO_XML);
        $total = count($xml->vivienda);
        return $total > 0 ? $xml->vivienda[$total - 1] : null;
    }
    return null;
}
?>