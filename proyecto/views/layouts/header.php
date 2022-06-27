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
    <title>Industria Emblemática</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <script src="/assets/scripts/scripts.js"></script>
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
                <a class="enlace -primario" href="<?php if (isset($_SESSION['usuario_id'])) {
                                                        echo '/views/Perfil.php?id=' . $_SESSION['usuario_id'];
                                                    } else {
                                                        echo '/views/IniciarSesion.php';
                                                    } ?>">
                    <?php
                    if (isset($_SESSION['usuario_id'])) {
                        echo "Hola, " . strtok($_SESSION['usuario_nombre'], " ");
                    } else {
                        echo "Iniciar sesión<br>o Registrarse";
                    }
                    ?>
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </a>
            </li>
            <?php
            if (isset($_SESSION['usuario_tipoUsuario']) && $_SESSION['usuario_tipoUsuario'] == "administrador") {
                echo
                "
                <li>
                    <a class='enlace -primario' href='/views/admin/'>
                        Dashboard";
                echo file_get_contents("$root/assets/svg/dashboard.svg");
                echo "</a></li>";
            }
            ?>
            <?php
            if (isset($_SESSION['usuario_id'])) {
                echo
                "
                <li>
                    <form id='cerrarSesion' action='/controllers/controladorAcceso.php' method='POST'>
                        <input type='hidden' name='_method' value='DELETE'>
                        <a onclick=\"formSubmit('cerrarSesion', '');\" class='boton -negativo -chico'>Cerrar sesión</a>
                    </form>
                </li>
                ";
            }
            ?>
        </ul>
    </nav>