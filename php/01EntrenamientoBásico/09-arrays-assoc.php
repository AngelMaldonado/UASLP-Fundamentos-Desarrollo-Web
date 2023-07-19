<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Angel',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

//echo $cliente['nombre'];
//echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 123123123;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
