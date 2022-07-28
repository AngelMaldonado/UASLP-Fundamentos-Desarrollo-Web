<?php include 'includes/header.php';

$clientes1 = [];
$clientes2 = array();
$clientes3 = array('Angel', 'Erika', 'Horacio');
$cliente = [
    'nombre' => 'Angel',
    'saldo' => 200
];

// Empty - Revisa si un arreglo está vacío
var_dump(empty($clientes1));
echo("<br>");
var_dump(empty($clientes3));
echo("<br>");
var_dump(empty($clientes2));
echo("<br>");

// Isset - Revisa si un arreglo está creado o una propiedad está definida
var_dump(isset($clientes4));
echo("<br>");
var_dump(isset($clientes3));
echo("<br>");
var_dump(isset($cliente['nombre']));
echo("<br>");

include 'includes/footer.php';
