<?php require('./layouts/header.php'); ?>

<main>
    <section class="IniciarSesion">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <a class="enlace -primario" href="/">
                <?php echo file_get_contents("$root/assets/svg/folder.svg"); ?>
                <h6>Paquetes de graduación</h6>
            </a>
        </nav>
        <div class="tarjetaPerfil">
            <?php require('./components/avatar.php'); ?>
            <form class="formulario" action="">
                <div>
                    <label for="correo">Correo</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correo">
                    </div>
                </div>
                <div>
                    <label for="contraseña">Contraseña</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                    </div>
                </div>
                <div>
                    <a class="boton -primario -grande" href="">Iniciar sesión</a>
                    <a class="boton -secundario -grande" href="">Registrarse</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>