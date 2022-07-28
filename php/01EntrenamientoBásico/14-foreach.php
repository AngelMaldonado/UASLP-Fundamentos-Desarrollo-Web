<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 40',
        'precio' => 10000,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo '$' . $producto['precio']; ?></p>
        <p>Precio: <?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?></p>
    </li>
    <?php
}
include 'includes/footer.php';
