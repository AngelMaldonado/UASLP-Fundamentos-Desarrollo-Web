<?php include 'includes/header.php';

$nombre = "Angel";

echo("<h3>" . $nombre . "</h3>");
var_dump($nombre);

define('constante', "Este es el valor de la constante con define");
echo("<h3>" . constante . "</h3>");

const constante2 = "Este es el valor de la constante con const";
echo("<h3>" . constante2 . "</h3>");


include 'includes/footer.php';
