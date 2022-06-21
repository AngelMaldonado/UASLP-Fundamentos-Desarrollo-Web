<?php
// Variable con el directorio raiz del proyecto
$root = dirname(__FILE__, 3);
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="AngelMaldonado">
    <title>Industria Emblemática - Dashboard</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/Dashboard.css">
    <script src="/assets/scripts/scripts.js"></script>
</head>

<body>
    <nav class="barraNavegacion">
        <div class="barraNavegacion__contenedor">
            <a class="barraNavegacion__logo" href="/views/admin/"><img src="/assets/svg/logo-ie-dashboard.svg" alt="logo-ie"></a>
            <a class="enlace -secundario" onclick="abreBarraNavegacion();">
                <?php echo file_get_contents("$root/assets/svg/menu.svg"); ?>
            </a>
        </div>
        <ul class="barraNavegacion__tabs">
            <li><a class="enlace -secundario" href="/views/admin/">Inicio</a></li>
            <li><a class="enlace -secundario" href="/views/admin/PedidosYPaquetes.php">Pedidos y paquetes</a></li>
            <li><a class="enlace -secundario" href="/views/admin/Inventario.php">Inventario</a></li>
            <li><a class="enlace -secundario" href="/views/admin/Usuarios.php">Usuarios</a></li>
            <li><a class="enlace -secundario" href="/views/admin/Contenido.php">Contenido</a></li>
        </ul>
        <ul class="barraNavegacion__tabs">
            <li>
                <!-- enlace+icono -->
                <a class="enlace -secundario" href="/views/Perfil.php">
                    <?php
                    if (isset($_SESSION['usuario_id'])) {
                        echo "Hola, " . strtok($_SESSION['usuario_nombre'], " ");
                    }
                    ?>
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </a>
            </li>
            <li>
                <a class='enlace -secundario' href="/">Volver a la tienda</a>
            </li>
            <li>
                <form action='/controllers/controladorAcceso.php' method='POST'>
                    <input type='hidden' name='_method' value='DELETE'>
                    <a id='submit' class='boton -negativo -chico'>Cerrar sesión</a>
                </form>
            </li>
        </ul>
    </nav>