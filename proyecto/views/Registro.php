<?php require('./layouts/header.php'); ?>

<main>
    <section class="Registro">
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
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "registroVacio") {
                    echo "<p>Los campos con '*' son requeridos</p><br>";
                }
                if ($_GET["error"] == "nombreInvalido") {
                    echo "<p>El nombre del usuario contiene caracteres inválidos </p><br>";
                }
                if ($_GET["error"] == "correoInvalido") {
                    echo "<p>El correo no es válido</p><br>";
                }
                if ($_GET["error"] == "telefonoInvalido") {
                    echo "<p>El telefono no es válido</p><br>";
                }
                if ($_GET["error"] == "estudiosInvalido") {
                    echo "<p>Los estudios contienen caracteres inválidos</p><br>";
                }
                if ($_GET["error"] == "escuelaInvalida") {
                    echo "<p>La escuela contiene caracteres inválidos</p><br>";
                }
                if ($_GET["error"] == "generacionInvalida") {
                    echo "<p>La generación no es válida</p><br>";
                }
                if ($_GET["error"] == "pswdsNoCoinciden") {
                    echo "<p>Las contraseñas no coinciden</p><br>";
                }
                if ($_GET["error"] == "pswdInvalida") {
                    echo "<p>La contraseña no es válida, al menos 12 caracteres</p><br>";
                }
                if ($_GET["error"] == "correoExistente") {
                    echo "<p>El correo ya está registrado</p><br>";
                }
                if ($_GET["error"] == "registroExitoso") {
                    echo "<p>Registro exitoso, ahora puede iniciar sesión</p><br>";
                }
            }
            ?>
            <div class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("$root/assets/svg/usuario.svg"); ?>
                </div>
            </div>
            <br><br>
            <form class="formulario" action="/controllers/controladorRegistro.php" method="POST">
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="tipoUsuario" value="cliente">
                <div class="campos">
                    <div>
                        <label for="nombre">Nombre*</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="text" placeholder="Nombre completo" name="nombre" required>
                        </div>
                    </div>
                    <div>
                        <label for="correo">Correo*</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="email" placeholder="Correo" name="correo" required>
                        </div>
                    </div>
                </div>
                <div class="campos">
                    <div>
                        <label for="telefono">Telefono (10 dígitos)</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="tel" placeholder="Teléfono" pattern="[0-9]{10}" name="telefono">
                        </div>
                    </div>
                    <div>
                        <label for="estudios">Estudios</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="text" placeholder="Estudios" name="estudios">
                        </div>
                    </div>
                </div>
                <div class="campos">
                    <div>
                        <label for="generacion">Generación</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="text" placeholder="Generación" name="generacion">
                        </div>
                    </div>
                    <div>
                        <label for="escuela">Escuela</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="text" placeholder="Escuela" name="escuela">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="pswd">Contraseña*</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Contraseña" name="pswd" required>
                    </div>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Confirmar contraseña" name="repswd" required>
                    </div>
                </div>
                <div>
                    <a id="submit" class="boton -primario -grande">Registrarme</a>
                    <a class="boton -secundario -grande" href="/views/IniciarSesion.php">Volver al inicio de sesión</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>