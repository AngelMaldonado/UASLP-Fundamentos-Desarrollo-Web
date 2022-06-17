<?php require('./views/layouts/header.php') ?>

<main>
    <!-- <div class="popup">
            <a href="/"><img src="" alt="icono-cerrar"></a>
            <div class="popup__texto">
                <h1>Confirmar creación del pedido</h1>
                <p>¿Desea crear su pedido ahora?</p>
            </div>
            <div class="popup__botones">
                <a class="botones__boton" href="/">Si, crear ahora</a>
                <a class="botones__boton" href="/">No, cancelar pedido</a>
            </div>
        </div> -->
    <section class="pedido grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <a class="enlace -primario" href="/">
                <?php echo file_get_contents("./assets/svg/folder.svg"); ?>
                <h6>Paquetes de graduación</h6>
            </a>
            <a class="etiqueta -primario" href="/">En espera</a>
        </nav>
        <div class="grid1f2c__detalles">
            <form class="detalles__formulario" action="">
                <label for="escuela">Escuela</label>
                <div class="cajaTexto -grande">
                    <input type="text" placeholder="Escuela">
                </div>
                <label for="carrera">Carrera</label>
                <div class="cajaTexto -grande">
                    <input type="text" placeholder="Carrera">
                </div>
                <label for="generacion">Generación</label>
                <div class="cajaTexto -grande">
                    <input type="text" placeholder="Generación">
                </div>
                <div class="formulario__botones">
                    <a class="boton -primario -grande" href="">Guardar</a>
                    <a class="boton -terciario -grande" href="">Cancelar</a>
                </div>
            </form>
        </div>
        <form class="formularioScroll" action="">
            <div class="formularioScroll__nuevoCorreo">
                <div class="cajaTexto">
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <a class="botonIcono -primario" href="">
                    <?php echo file_get_contents("./assets/svg/mas.svg"); ?>
                </a>
            </div>
        </form>
    </section>
</main>

<?php require('./views/layouts/footer.php') ?>