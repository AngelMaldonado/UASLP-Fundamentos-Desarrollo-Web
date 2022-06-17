<?php require('./views/layouts/header.php'); ?>

<main>
    <!-- <div class="popup">
            <a href="/"><img src="" alt="icono-cerrar"></a>
            <i class="popup__contenedorIcono">icono</i>
            <div class="popup__texto">
                <h1>Su cuenta no es de tipo representante de grupo</h1>
                <p>¿Desea cambiar su tipo de cuenta a representante de grupo?</p>
            </div>
            <div class="popup__botones">
                <a class="botones__boton" href="/">Si, cambiar y continuar</a>
                <a class="botones__boton" href="/">No, cancelar pedido</a>
            </div>
        </div> -->
    <section class="portada">
        <div class="portada__titulo">
            <h1>Gradúate junto con tus compañeros y amigos</h1>
            <br>
            <p>Esta sección es para iniciar el proceso de un pedido para toda una generación o grupo de alguna
                carrera o escuela.</p>
        </div>
    </section>
    <section class="pasos">
        <div class="pasos__paso">
            <h1 class="XL">1</h1>
            <h3>
                Registrate como representante de grupo,
                o dile a tu representante que se registre.
            </h3>
            <a class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("./assets/svg/grupo.svg"); ?>
                </div>
            </a>
        </div>
        <div class="pasos__paso">
            <h1 class="XL">2</h1>
            <h3>
                El representante agrega el correo de los
                demás alumnos del grupo para invitarlos
                a que formen parte del pedido (al menos
                8 alumnos).
            </h3>
            <a class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("./assets/svg/arroba.svg"); ?>
                </div>
            </a>
        </div>
        <div class="pasos__paso">
            <h1 class="XL">3</h1>
            <h3>
                Cuando al menos el 95% de los alumnos
                se hayan registrado para formar parte
                del pedido, se iniciará el proceso de
                toma de fotos y producción de los
                paquetes.
            </h3>
            <a class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("./assets/svg/verificado.svg"); ?>
                </div>
            </a>
        </div>
    </section>
    <section class="notas">
        <h2>Aspectos a tomar en cuenta</h2>
        <br><br>
        <ul>
            <li>
                <h3>
                    Los avisos se envían a todos los alumnos que forman parte del pedido, y pueden ver el estado del
                    pedido y su paquete en el historial de cada alumno.
                </h3>
            </li>
            <li>
                <h3>
                    Los detalles del pedido como el modelo del marco, colo, texto de agradecimiento o tipo de anillo
                    lo realiza cada alumno en la plataforma dentro de sus historiales. La selección de foto
                    individual y medida para el anillo se realiza acudiento a las oficinas o en el día de la foto
                    grupal.
                </h3>
            </li>
            <li>
                <h3>
                    Las fechas de toma de foto grupal y entrega de los paquetes se acuerda con el jefe de grupo.
                </h3>
            </li>
        </ul>
        <br><br>
        <a class="boton -primario -grande" href="./InformacionDelPedido.php">
            <?php echo file_get_contents("./assets/svg/graduacion.svg"); ?>
            Crear pedido ahora
        </a>
    </section>
</main>

<?php require('./views/layouts/footer.php'); ?>