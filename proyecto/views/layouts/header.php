<?php
// Variable con el directorio raiz del proyecto
$root = dirname(__FILE__, 3);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="AngelMaldonado">
    <title>Industria Emblemática</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <script src="/assets/js/script.js"></script>
</head>

<body>
    <nav class="barraNavegacion">
        <div class="barraNavegacion__contenedor">
            <a class="barraNavegacion__logo" href="/"><img src="/assets/svg/logo-ie.svg" alt="logo-ie"></a>
            <a class="enlace -primario" onclick="abreBarraNavegacion();">
                <?php echo file_get_contents("$root/assets/svg/menu.svg"); ?>
            </a>
        </div>
        <ul class="barraNavegacion__tabs">
            <li><a class="enlace -primario" href="/">Inicio</a></li>
            <li><a class="enlace -primario" href="/views/ProductosYServicios.php">Productos y servicios</a></li>
            <li><a class="enlace -primario" href="/views/CrearPedido.php">Crear pedido</a></li>
            <li><a class="enlace -primario" href="/views/Galeria.php">Galería</a></li>
        </ul>
        <ul class="barraNavegacion__tabs">
            <li>
                <!-- enlace+icono -->
                <a class="enlace -primario" href="/views/Bolsa.php">
                    Bolsa
                    <?php echo file_get_contents("$root/assets/svg/bolsa.sv<"); ?>
                </a>
            </li>
            <li>
                <!-- enlace+icono -->
                <a class="enlace -primario" href="/views/Perfil.php">
                    Perfil
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </a>
            </li>
            <li>
                <a class="enlace -primario" href="#">
                    Dashboard
                    <?php echo file_get_contents("$root/assets/svg/dashboard.svg"); ?>
                </a>
            </li>
        </ul>
    </nav>