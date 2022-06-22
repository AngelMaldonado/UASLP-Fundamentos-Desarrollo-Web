<?php require('./layouts/header.php'); ?>

<main>
    <section class="VerProducto grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <ul class="navegacionPagina__ruta">
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("$root/assets/svg/dashboard.svg"); ?>
                        <h6>Productos y servicios</h6>
                        <?php echo file_get_contents("$root/assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("$root/assets/svg/folder.svg"); ?>
                        <h6 id="categoriaProducto">
                            <!-- /assets/scripts/components/producto.js -->
                        </h6>
                        <?php echo file_get_contents("$root/assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("$root/assets/svg/archivo.svg"); ?>
                        <h6 id="rutaNombreProducto">
                            <!-- /assets/scripts/components/producto.js -->
                        </h6>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="exhibidor">
            <ul class="exhibidor__imagenes">
                <li class="imagenes__imagen"><a href="/"><img src="https://picsum.photos/1920" alt="imagen 1"></a></li>
                <li class="imagenes__imagen"><a href="/"><img src="https://picsum.photos/200" alt="imagen 2"></a></li>
                <li class="imagenes__imagen"><a href="/"><img src="https://picsum.photos/200" alt="imagen 3"></a></li>
            </ul>
            <img class="exhibidor__actual" src="https://picsum.photos/1920" alt="imagen actual">
        </div>
        <form class="formulario">
            <header class="formulario__titulo">
                <h1 id="principalNombreProducto">
                    <!-- /assets/scripts/components/producto.js -->
                </h1>
                <?php require('./components/controlEstrellas.php'); ?>
                <h3 id="principalPrecioVenta">
                    <!-- /assets/scripts/components/producto.js -->
                </h3>
            </header>
            <div class="formulario__disponibilidad">
                <h3 id="principalDisponibles">
                    <!-- /assets/scripts/components/producto.js -->
                </h3>
                <div class="controlNumerico">
                    <a class="botonIcono -primario -grande" href="/">
                        <?php echo file_get_contents("$root/assets/svg/menos.svg"); ?>
                    </a>
                    <p>1</p>
                    <a class="botonIcono -primario -grande" href="/">
                        <?php echo file_get_contents("$root/assets/svg/mas.svg"); ?>
                    </a>
                </div>
            </div>
            <div class="formulario__botonesCompra">
                <a class="boton -primario -mediano" href="/">Comprar ahora</a>
                <a class="boton -secundario -mediano" href="/">Agregar a la bolsa</a>
                <a class="boton -terciario -mediano" href="/">Crear pedido</a>
            </div>
        </form>
    </section>
    <section class="productoDescripcion">
        <div class="separador"></div>
        <div class="contenido">
            <h1>Descripción</h1>
            <br>
            <h3 id="principalDescripcion">
                <!-- /assets/scripts/components/producto.js -->
            </h3>
        </div>
        <div class="separador"></div>
    </section>
    <section class="comentarios">
        <h1>Comentarios</h1>
        <div class="comentarios__tarjetas">
            <?php require('./components/tarjetaComentario.php'); ?>
            <?php require('./components/tarjetaComentario.php'); ?>
            <?php require('./components/tarjetaComentario.php'); ?>
            <?php require('./components/tarjetaComentario.php'); ?>
            <!-- fin tarjetaComentario -->
            <div class="tarjetaNuevoComentario">
                <div class="tarjetaNuevoComentario__usuario">
                    <?php require('./components/avatar.php'); ?>
                </div>
                <form class="tarjetaNuevoComentario__entradas">
                    <?php require('./components/controlEstrellas.php'); ?>
                    <div class="cajaAreaTexto -normal">
                        <textarea name="comentario" placeholder="Comentario"></textarea>
                        <p>0/120</p>
                    </div>
                    <a class="boton -primario -grande" href="/">Enviar</a>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>