<?php require('./views/layouts/header.php'); ?>

<main>
    <section class="portada">
        <div class="portada__titulo">
            <h1>Productos y servicios</h1>
        </div>
    </section>
    <nav class="barraBusqueda">
        <ul class="barraBusqueda__categorias">
            <li><a class="etiqueta -primario" href="/">Paquetes de graduación</a></li>
            <li><a class="etiqueta -primario" href="/">Anillos</a></li>
            <li><a class="etiqueta -primario" href="/">Artículos promocionales</a></li>
            <li><a class="etiqueta -primario" href="/">Trofeos y reconocimientos</a></li>
            <li><a class="etiqueta -primario" href="/">Renta de togas y birretes</a></li>
        </ul>
        <div class="cajaTexto -chico">
            <input type="search" placeholder="Buscar">
            <a href="">
                <?php echo file_get_contents("./assets/svg/buscar.svg"); ?>
            </a>
        </div>
    </nav>
    <section class="tarjetasProductos">
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
        <?php require("./views/components/tarjetaProducto.php"); ?>
    </section>
    <nav class="paginas">
        <a class="enlace -primario -grande" href="/">
            <?php echo file_get_contents("./assets/svg/diamante-izquierda.svg"); ?>
            Anterior
        </a>
        <ul>
            <li><a class="enlace -primario" href="/">1</a></li>
            <li><a class="enlace -primario" href="/">2</a></li>
            <li><a class="enlace -primario" href="/">3</a></li>
        </ul>
        <a class="enlace -primario -grande" href="/">
            Siguiente
            <?php echo file_get_contents("./assets/svg/diamante-derecha.svg"); ?>
        </a>
    </nav>
</main>

<?php require('./views/layouts/footer.php'); ?>