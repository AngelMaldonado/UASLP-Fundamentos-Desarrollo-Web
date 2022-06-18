<?php require('./layouts/header.php'); ?>

<main>
    <section class="Perfil grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <h1>Hola, -nombre-</h1>
            <a class="etiqueta -primario" href="/">Tipo usuario</a>
        </nav>
        <div class="tarjetaPerfil">
            <?php require('./components/avatar.php'); ?>
            <form class="formulario" action="">
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
                        <label for="carrera">Carrera</label>
                        <div class="cajaTexto -grande -normal">
                            <input type="text" placeholder="Carrera" name="carrera">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="generacion">Generación</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="text" placeholder="Generación" name="generacion">
                    </div>
                </div>
                <div>
                    <label for="contraseña">Contraseña*</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Contraseña" name="contraseña" required>
                    </div>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Confirmar contraseña" name="contraseña" required>
                    </div>
                </div>
                <div>
                    <a class="boton -primario -grande" href="">Registrarme</a>
                    <a class="boton -secundario -grande" href="">Volver al inicio de sesión</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>