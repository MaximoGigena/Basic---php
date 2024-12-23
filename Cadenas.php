<?php 
echo "Ingresa tu nombre: "; 
$nombre = trim(fgets(STDIN));

echo "Nombre ingresado: " . $nombre . PHP_EOL;

$nombreMin = strtolower($nombre);
echo "En minúsculas: " . $nombreMin . PHP_EOL;

$nombreMay = strtoupper($nombre);
echo "En mayúsculas: " . $nombreMay . PHP_EOL;

$nombreInv = strrev($nombre);
echo "Nombre invertido: " . $nombreInv . PHP_EOL;
?>
