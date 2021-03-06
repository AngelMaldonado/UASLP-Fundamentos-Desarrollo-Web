<?php require('./views/layouts/header.php') ?>

<main>
    <section style="background-image: url('/assets/img/hero.jpg');" class="hero">
        <div class="slidesContenedor">
            <div class="slidesContenedor__control">
                <a class="botonIcono -primario -r50" href="">
                    <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
                </a>
                <a class="botonIcono -primario -r50" href="">
                    <?php echo file_get_contents("./assets/svg/flecha-derecha.svg"); ?>
                </a>
            </div>
            <!-- slides -->
            <div class="slidesContenedor__slides">
                <!-- slide 1 -->
                <div class="slide">
                    <div class="slide__descripcion">
                        <h1>Porque recordar es parte de tu éxito</h1>
                        <h3>
                            La constante lucha por concluír una etapa muy importante de tu vida, debe permanecer
                            incluso después de haber terminado tus estudios.
                        </h3>
                        <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Ver paquetes de graduación</a>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="slides__slide">
                    <div class="slide__descripcion">
                        <h1>Porque recordar es parte de tu éxito2</h1>
                        <h3>
                            La constante lucha por concluír una etapa muy importante de tu vida, debe permanecer
                            incluso después de haber terminado tus estudios.
                        </h3>
                        <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Ver paquetes de graduación</a>
                    </div>
                </div>
            </div>
            <!-- fin slides -->
        </div>
    </section>
    <section class="introduccionIzquierda">
        <div class="tarjetaInicio" style="background-image: url('/assets/img/tarjeta-inicio1.jpg');"></div>
        <div class="tarjetaInicio">
            <h1>Paquetes de graduación</h1>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, deleniti iste. At quidem
                minus
                error quibusdam. Cum dolores eius sint nesciunt aspernatur aperiam totam id, temporibus at,
                fugiat,
                est iusto!
                Vero maiores animi laudantium quidem. Qui saepe molestiae voluptatem eum cumque est unde
                nesciunt,
                accusantium earum reiciendis illum dolor culpa laborum at minima architecto magni in aperiam
                fuga
                distinctio nisi.
            </h3>
            <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Ver paquetes de graduación</a>
        </div>
    </section>
    <section class="introduccionDerecha">
        <div class="tarjetaInicio" style="background-image: url('/assets/img/tarjeta-inicio2.jpg');"></div>
        <div class="tarjetaInicio">
            <h1>Artículos promocionales</h1>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, deleniti iste. At quidem
                minus
                error quibusdam. Cum dolores eius sint nesciunt aspernatur aperiam totam id, temporibus at,
                fugiat,
                est iusto!
                Vero maiores animi laudantium quidem. Qui saepe molestiae voluptatem eum cumque est unde
                nesciunt,
                accusantium earum reiciendis illum dolor culpa laborum at minima architecto magni in aperiam
                fuga
                distinctio nisi.
            </h3>
            <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Ver artículos promocionales</a>
        </div>
    </section>
    <section class="introduccionIzquierda">
        <div class="tarjetaInicio" style="background-image: url('/assets/img/tarjeta-inicio3.jpg');"></div>
        <div class="tarjetaInicio">
            <h1>Trofeos y reconocimientos</h1>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, deleniti iste. At quidem
                minus
                error quibusdam. Cum dolores eius sint nesciunt aspernatur aperiam totam id, temporibus at,
                fugiat,
                est iusto!
                Vero maiores animi laudantium quidem. Qui saepe molestiae voluptatem eum cumque est unde
                nesciunt,
                accusantium earum reiciendis illum dolor culpa laborum at minima architecto magni in aperiam
                fuga
                distinctio nisi.
            </h3>
            <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Ver trofeos y reconocimientos</a>
        </div>
    </section>
    <section class="introduccionDerecha">
        <div class="tarjetaInicio" style="background-image: url('/assets/img/tarjeta-inicio4.jpg');"></div>
        <div class="tarjetaInicio">
            <h1>Renta de togas y birretes</h1>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, deleniti iste. At quidem
                minus
                error quibusdam. Cum dolores eius sint nesciunt aspernatur aperiam totam id, temporibus at,
                fugiat,
                est iusto!
                Vero maiores animi laudantium quidem. Qui saepe molestiae voluptatem eum cumque est unde
                nesciunt,
                accusantium earum reiciendis illum dolor culpa laborum at minima architecto magni in aperiam
                fuga
                distinctio nisi.
            </h3>
            <a class="boton -primario -grande" href="/views/ProductosYServicios.php">Cotizar renta</a>
        </div>
    </section>
    <section class="experiencia">
        <h1>Nuestra experiencia nos respalda</h1>
        <ul class="experiencia__tarjetas">
            <li class="tarjetaExperiencia">
                <a class="iconoContenedor -primario -r50">
                    <div class="contenedorResponsivo">
                        <?php echo file_get_contents("./assets/svg/graduacion.svg"); ?>
                    </div>
                </a>
                <h1>+2000</h1>
                <h3>Graduaciones</h3>
            </li>
            <li class="tarjetaExperiencia">
                <div class="iconoContenedor -primario -r50">
                    <div class="contenedorResponsivo">
                        <?php echo file_get_contents("./assets/svg/emoji-feliz.svg"); ?>
                    </div>
                </div>
                <h1>+2000</h1>
                <h3>Clientes satisfechos</h3>
            </li>
            <li class="tarjetaExperiencia">
                <div class="iconoContenedor -primario -r50">
                    <div class="contenedorResponsivo">
                        <?php echo file_get_contents("./assets/svg/pin.svg"); ?>
                    </div>
                </div>
                <h1>+2000</h1>
                <h3>Estados presentes</h3>
            </li>
            <li class="tarjetaExperiencia">
                <div class="iconoContenedor -primario -r50">
                    <div class="contenedorResponsivo">
                        <?php echo file_get_contents("./assets/svg/empresa.svg"); ?>
                    </div>
                </div>
                <h1>+2000</h1>
                <h3>Empresas con las que trabajamos</h3>
            </li>
        </ul>
    </section>
    <section class="mejoresProductos">
        <h1>Nuestros mejores productos</h1>
        <!-- mejoresProductos__tarjetas -->
        <ul class="mejoresProductos__tarjetas">
            <li><?php require('./views/components/tarjetaProducto.php'); ?></li>
            <li><?php require('./views/components/tarjetaProducto.php'); ?></li>
            <li><?php require('./views/components/tarjetaProducto.php'); ?></li>
            <li><?php require('./views/components/tarjetaProducto.php'); ?></li>
        </ul> <!-- fin mejoresProductos__tarjetas -->
    </section>
    <section class="testimoniales" style="background-image: url('/assets/img/fondo-testimoniales.jpg');">
        <div class="slidesContenedor">
            <div class="slidesContenedor__control">
                <a class="botonIcono -primario -r50" href="">
                    <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
                </a>
                <a class="botonIcono -primario -r50" href="/">
                    <?php echo file_get_contents("./assets/svg/flecha-derecha.svg"); ?>
                </a>
            </div>
            <!-- slides -->
            <div class="slidesContenedor__slides">
                <!-- slide 1 -->
                <div class="slide">
                    <div class="usuario">
                        <?php require('./views/components/avatar.php'); ?>
                        <div class="usuario__info">
                            <h1>
                                Diana Hernández <br>
                                Ing. Civil <br>
                                Gen. 2012-2016 <br>
                            </h1>
                        </div>
                    </div>
                    <div class="cita">
                        <?php echo file_get_contents("./assets/svg/cita.svg"); ?>
                        <h3>
                            Sin duda una de las mejores experiencias que he tenido en mi vida, y lo mejor de
                            todo, es que lo recordaré por siempre gracias a los productos que IE me dió!
                        </h3>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="slide">
                    <div class="usuario">
                        <?php require('./views/components/avatar.php'); ?>
                        <div class="usuario__info">
                            <h1>
                                Diana Hernández <br>
                                Ing. Civil <br>
                                Gen. 2012-2016 <br>
                            </h1>
                        </div>
                    </div>
                    <div class="cita">
                        <?php echo file_get_contents("./assets/svg/cita.svg"); ?>
                        <h3>
                            Sin duda una de las mejores experiencias que he tenido en mi vida, y lo mejor de
                            todo, es que lo recordaré por siempre gracias a los productos que IE me dió!
                        </h3>
                    </div>
                </div>
            </div>
            <!-- fin slides -->
        </div>
    </section>
    <section class="siguenos" style="background-image: url('/assets/img/redes-sociales.jpg');">
        <h1>Síguenos</h1>
        <nav>
            <ul class="redes">
                <li>
                    <a class="icono -t172" href="https://www.facebook.com/Industria-Emblem%C3%A1tica-351335471558011">
                        <?php echo file_get_contents("./assets/svg/facebook.svg"); ?>
                    </a>
                </li>
                <li class="redes__icono">
                    <a class="icono -t172" href="/">
                        <?php echo file_get_contents("./assets/svg/instagram.svg"); ?>
                    </a>
                </li>
                <li class="redes__icono">
                    <a class="icono -t172" href="/">
                        <?php echo file_get_contents("./assets/svg/whatsapp.svg"); ?>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</main>

<?php require('./views/layouts/footer.php') ?>