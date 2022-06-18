<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="AngelMaldonado">
    <title>Industria Emblemática</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/script.js"></script>
</head>

<body>
    <nav class="barraNavegacion">
        <div class="barraNavegacion__contenedor">
            <a class="barraNavegacion__logo" href="./index.php"><img src="/assets/svg/logo-ie.svg" alt="logo-ie"></a>
            <a class="enlace -primario" onclick="abreBarraNavegacion();">
                <?php echo file_get_contents("./assets/svg/menu.svg"); ?>
            </a>
        </div>
        <ul class="barraNavegacion__tabs">
            <li><a class="enlace -primario" href="./index.php">Inicio</a></li>
            <li><a class="enlace -primario" href="./ProductosYServicios.php">Productos y servicios</a></li>
            <li><a class="enlace -primario" href="./CrearPedido.php">Crear pedido</a></li>
            <li><a class="enlace -primario" href="./Galeria.php">Galería</a></li>
        </ul>
        <ul class="barraNavegacion__tabs">
            <li>
                <!-- enlace+icono -->
                <a class="enlace -primario" href="./Bolsa.php">
                    Bolsa
                    <?php echo file_get_contents("./assets/svg/bolsa.svg"); ?>
                </a>
            </li>
            <li>
                <!-- enlace+icono -->
                <a class="enlace -primario" href="#">
                    Perfil
                    <?php echo file_get_contents("./assets/svg/usuario.svg"); ?>
                </a>
            </li>
            <li>
                <a class="enlace -primario" href="#">
                    Dashboard
                    <?php echo file_get_contents("./assets/svg/dashboard.svg"); ?>
                </a>
            </li>
        </ul>
    </nav>