<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));
echo "<br>";

// Ordenar elementos en un arreglo
$numeros = array(1, 2, 4, 5, 1, 0, -1);

// sort - de menor a mayor
sort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// rsort - de mayor a menor
rsort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Angel'
);

// Ordena por valores (orden alfabetico)
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Ordena por valores (orden alfabetico reverso)
arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ordena por llaves (orden alfabetico)
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ordena por llaves (orden alfabetico reverso)
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
