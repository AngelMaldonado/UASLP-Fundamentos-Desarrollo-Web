<?php include 'includes/header.php';

// While
$i = 0; // Inicializador
while ($i < 10) :
    echo $i++ . "<br>";
endwhile;

// Do-while
$i = 0;
do {
    echo $i++ . "<br>";
} while ($i < 10);

// For
//for ($i = 0; $i < 1000; $i++) {
//    if ($i % 3 === 0 && $i % 5 === 0) {
//        echo $i . "- FIZZ BUZZ <br>";
//    } else if ($i % 3 === 0) {
//        echo $i . "- Fizz <br>";
//    } else if ($i % 5 === 0) {
//        echo $i . "- Buzz <br>";
//    } else {
//        echo $i . "<br>";
//    }
//}

// For each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}

$cliente = [
    'nombre' => 'Angel',
    'saldo' => 300,
    'tipo' => 'admin'
];

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}
include 'includes/footer.php';
