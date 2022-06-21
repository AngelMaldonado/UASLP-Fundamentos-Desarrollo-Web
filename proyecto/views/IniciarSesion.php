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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "registroVacio") {
                    echo "<p>Por favor introduzca correo y contraseña</p><br>";
                }
                if ($_GET["error"] == "correoInvalido") {
                    echo "<p>El correo que introdujo no es válido</p><br>";
                }
                if ($_GET["error"] == "correoInexistente") {
                    echo "<p>El correo que introdujo aún no está registrado</p><br>";
                }
                if ($_GET["error"] == "pswdInvalida") {
                    echo "<p>La contraseña no es válida</p><br>";
                }
            }
            ?>
            <div class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </div>
            </div>
            <form class="formulario" action="/controllers/controladorAcceso.php" method="POST">
                <input type="hidden" name="_method" value="POST">
                <div>
                    <label for="correo">Correo</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correo">
                    </div>
                </div>
                <div>
                    <label for="pswd">Contraseña</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Contraseña" name="pswd">
                    </div>
                </div>
                <div>
                    <a id="submit" class="boton -primario -grande">Iniciar sesión</a>
                    <a class="boton -secundario -grande" href="/views/Registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>