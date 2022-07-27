<?php include 'includes/header.php';

$nombre = "Angel Maldonado";

// Conocer extensión de un string
echo strlen($nombre);
var_dump($nombre);

// Eliminar espacios en blanco
$texto = trim($nombre);
echo strlen($texto);

// Convertirlo a mayúsculas
echo strtoupper($nombre);

// Convertirlo a minúsculas
echo strtolower($nombre);

// Reemplazar string
echo str_replace('Maldonado', 'M', $nombre);

// Verificar si string existe
echo strpos($nombre, 'Angel');

// Concatenación
echo "El cliente" . $nombre . " es premium";
echo "El cliente $nombre es premium";

include 'includes/footer.php';
