<?php include 'includes/header.php';

// Variable de arreglo
$carrito = ['Tablet', 'Televisión', 'Computadora'];

// Util para ver contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Ver un elemento del array
echo $carrito[0];

// Agregar un elemento
$carrito[3] = 'Nuevo producto...';
// Al inicio
array_push($carrito, 'Audifonos');
// Al final
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';
