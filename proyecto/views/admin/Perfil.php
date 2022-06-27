<?php require('../layouts/dashboard_header.php'); ?>

<main>
    <section class="Perfil grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="javascript:history.back();">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <h1 id="saludoUsuario"></h1>
            <a id="tipoDeUsuario" class="etiqueta -primario"></a>
        </nav>
        <div class="tarjetaPerfil">
            <?php require("./components/avatar.php"); ?>
            <form class="formulario" action="">
                <div class="campos">
                    <div>
                        <label for="nombre">Nombre*</label>
                        <div class="cajaTexto -grande -normal">
                            <input id="nombreUsuario" type="text" placeholder="Nombre completo" name="nombre" required>
                        </div>
                    </div>
                    <div>
                        <label for="correo">Correo*</label>
                        <div class="cajaTexto -grande -normal">
                            <input id="correoUsuario" type="email" placeholder="Correo" name="correo" required>
                        </div>
                    </div>
                </div>
                <div class="campos">
                    <div>
                        <label id="telUsuario" for="telefono">Telefono (10 dígitos)</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="tel" placeholder="Teléfono" pattern="[0-9]{10}" name="telefono">
                        </div>
                    </div>
                    <div>
                        <label for="estudios">Estudios</label>
                        <div class="cajaTexto -grande -normal">
                            <input id="estudiosUsuario" type="text" placeholder="Estudios" name="estudios">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="generacion">Generación</label>
                    <div class="cajaTexto -grande -normal">
                        <input id="generacionUsuario" type="text" placeholder="Generación" name="generacion">
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
                <a class="boton -primario -grande" href="">Guardar cambios</a>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>