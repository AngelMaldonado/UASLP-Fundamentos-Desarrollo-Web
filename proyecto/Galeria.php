<?php require('./views/layouts/header.php') ?>

<main>
    <!-- <div class="popupImagen">
        <a href="/"><img src="" alt="icono-cerrar"></a>
    </div> -->
    <section class="portada">
        <div class="portada__titulo">
            <h1>Galería</h1>
        </div>
    </section>
    <nav class="barraBusqueda">
        <ul class="barraBusqueda__categorias">
            <li><a class="etiqueta -primario" href="/">Graduaciones</a></li>
            <li><a class="etiqueta -primario" href="/">Artículos</a></li>
            <li><a class="etiqueta -primario" href="/">Chuscas</a></li>
            <li><a class="etiqueta -primario" href="/">Textos</a></li>
        </ul>
    </nav>
    <section class="grid4c">
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
        <?php require('./views/components/tarjetaGaleria.php'); ?>
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

<?php require('./views/layouts/footer.php') ?>