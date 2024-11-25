<?php
//creamos el documento y escribimos en el 
echo "Creando y escribiendo en el archivo...\n";
$archivo = fopen("ejemplo.txt", "w");
fwrite($archivo, "Primera línea\n");
fwrite($archivo, "Segunda línea\n");
fwrite($archivo, "Tercera línea\n");
fclose($archivo);

//recogemos el contenido del archivo
echo "\nLeyendo y mostrando el contenido del archivo:\n";
$archivo = fopen("ejemplo.txt", "r");
while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea;
}
fclose($archivo);


//
echo "\nEscribiendo nuevo contenido en el archivo...\n";
$archivo = fopen("ejemplo.txt", "w");
fwrite($archivo, "Nuevo contenido\n");
fwrite($archivo, "Otra línea nueva\n");
fclose($archivo);

echo "Nuevo contenido del archivo:\n";
$archivo = fopen("ejemplo.txt", "r");
while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea;
}
fclose($archivo);


//copiamos el archivo original y lo sustituimos por el nuevo//

echo "\nCopiando el archivo...\n";
if (copy("ejemplo.txt", "copia_ejemplo.txt")) {
    echo "Archivo copiado con éxito.\n";
} else {
    echo "Error al copiar el archivo.\n";
}


//y aqui lo que hace es renombrar el archivo ejemplo.txt a "nuevo_nombre"


echo "\nRenombrando el archivo...\n";
if (rename("ejemplo.txt", "nuevo_nombre.txt")) {
    echo "Archivo renombrado con éxito.\n";
} else {
    echo "Error al renombrar el archivo.\n";
}

//y  con el comando unlink lo que hacemos es eleminar la copia anterior

echo "\nEliminando el archivo...\n";
if (unlink("nuevo_nombre.txt")) {
    echo "Archivo eliminado con éxito.\n";
} else {
    echo "Error al eliminar el archivo.\n";
}


echo "\nOperaciones de manipulación de archivos completadas.\n";

?>