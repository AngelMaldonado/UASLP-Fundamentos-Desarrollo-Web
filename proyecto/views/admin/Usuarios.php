<?php require('../layouts/dashboard_header.php'); ?>

<main>
    <section>
        <form class="formulario" action="/controllers/controladorRegistro.php" method="POST">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="tipoUsuario" value="administrador">
            <h1>Nuevo usuario ADMINISTRADOR (ID:#1)</h1>
            <br>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "registroVacio") {
                    echo "<p>Los campos están vacíos</p><br>";
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
            <div class="campos">
                <div>
                    <label for="nombre">Nombre</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="text" placeholder="Nombre completo" name="nombre">
                    </div>
                </div>
                <div>
                    <label for="pswd">Contraseña</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Contraseña" name="pswd">
                    </div>
                </div>
            </div>
            <br>
            <div class="campos">
                <div>
                    <label for="correo">Correo</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="Correo" name="correo">
                    </div>
                </div>
                <div>
                    <label for="repswd">Confirmar contraseña</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="password" placeholder="Confirmar contraseña" name="repswd">
                    </div>
                </div>
            </div>
            <br>
            <div class="campos">
                <div>
                    <label for="foto">Foto</label>
                    <div class="-chico">
                        <input type="file" name="foto">
                    </div>
                </div>
                <a class="submit boton -positivo -grande">Agregar</a>
            </div>
        </form>
        <div class="tarjetasUsuario">
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
            <?php require('../components/tarjetaUsuario.php'); ?>
        </div>
    </section>
</main>