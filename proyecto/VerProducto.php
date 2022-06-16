<?php require('./views/layouts/header.php'); ?>

<main>
    <section class="principalProducto">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <ul class="navegacionPagina__ruta">
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/dashboard.svg"); ?>
                        <h6>Productos y servicios</h6>
                        <?php echo file_get_contents("./assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/folder.svg"); ?>
                        <h6>Paquetes de graduación</h6>
                        <?php echo file_get_contents("./assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/archivo.svg"); ?>
                        <h6>Productos y servicios</h6>
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
        <div class="principalProducto__detalles">
            <header class="detalles__titulo">
                <h1>Paquete de graduación diamante</h1>
                <?php require('./views/components/controlEstrellas.php'); ?>
                <h3>$1850.00</h3>
            </header>
            <div class="detalles__disponibilidad">
                <h3>Disponibles: 30</h3>
                <div class="controlNumerico">
                    <a class="botonIcono -primario -grande" href="/">
                        <?php echo file_get_contents("./assets/svg/menos.svg"); ?>
                    </a>
                    <p>1</p>
                    <a class="botonIcono -primario -grande" href="/">
                        <?php echo file_get_contents("./assets/svg/mas.svg"); ?>
                    </a>
                </div>
            </div>
            <div class="detalles__botonesCompra">
                <a class="boton -primario -mediano" href="/">Comprar ahora</a>
                <a class="boton -secundario -mediano" href="/">Agregar a la bolsa</a>
                <a class="boton -terciario -mediano" href="/">Crear pedido</a>
            </div>
        </div>
    </section>
    <section class="productoDescripcion">
        <div class="separador"></div>
        <div class="contenido">
            <h1>Descripción</h1>
            <br>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim inventore officiis, tempore facilis
                quis
                eligendi reprehenderit! Exercitationem placeat itaque sunt, cum, dolor enim cupiditate neque
                quibusdam
                quis quae nesciunt ullam!
                Repellendus corporis maxime a, repellat mollitia quas, expedita voluptate veniam molestiae placeat
                sapiente nulla exercitationem ab praesentium quae possimus. Natus repellat dolores veniam iure sit
                itaque voluptatum, nobis id esse?
            </h3>
        </div>
        <div class="separador"></div>
    </section>
    <section class="comentarios">
        <h1>Comentarios</h1>
        <div class="comentarios__tarjetas">
            <?php require('./views/components/tarjetaComentario.php'); ?>
            <?php require('./views/components/tarjetaComentario.php'); ?>
            <?php require('./views/components/tarjetaComentario.php'); ?>
            <?php require('./views/components/tarjetaComentario.php'); ?>
            <!-- fin tarjetaComentario -->
            <div class="tarjetaNuevoComentario">
                <div class="tarjetaNuevoComentario__usuario">
                    <div class="avatar">
                        <div class="contenedorResponsivo">
                            <img class="-r50" src="https://i.pravatar.cc/300
                                    " alt="avatar usuario">
                        </div>
                    </div>
                </div>
                <form class="tarjetaNuevoComentario__entradas">
                    <?php require('./views/components/controlEstrellas.php'); ?>
                    <div class="cajaAreaTexto">
                        <textarea name="comentario" placeholder="Comentario"></textarea>
                        <p>0/120</p>
                    </div>
                    <a class="boton -primario -grande" href="/">Enviar</a>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require('./views/layouts/footer.php'); ?>