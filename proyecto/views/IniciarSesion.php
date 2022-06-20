<?php require('./layouts/header.php'); ?>

<main>
    <section class="IniciarSesion">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="javascript:history.back();">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <div class="enlace -primario">
                <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                <h6>Iniciar sesión</h6>
            </div>
        </nav>
        <div class="tarjetaPerfil">
            <div class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </div>
            </div>
            <form class="formulario" action="/controllers/controladorAcceso.php" method="POST">
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
                    <a class="boton -secundario -grande" href="/views/Registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>