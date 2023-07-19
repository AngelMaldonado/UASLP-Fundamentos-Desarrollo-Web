<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, iniciar sesión';
}

// If anidados
$cliente = [
    'nombre' => 'Angel',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<br>";

if (!empty($cliente)) {
    echo 'El arreglo de cliente está vacío';
    if ($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo disponible';
    } else {
        echo 'El cliente no tiene saldo';
    }
}

// Switch
$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo "Un excelente lenguaje";
        break;
    default:
        echo "Algun lenguaje, no se cual es...";
        break;
}

include 'includes/footer.php';
