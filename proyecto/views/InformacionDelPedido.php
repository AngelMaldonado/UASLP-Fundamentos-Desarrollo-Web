<?php require('./layouts/header.php') ?>

<main>
    <!-- <div class="popup">
            <a href="/"><img src="" alt="icono-cerrar"></a>
            <div class="popup__texto">
                <h1>Confirmar creación del pedido</h1>
                <p>¿Desea crear su pedido ahora?</p>
            </div>
            <div class="popup__botones">
                <a class="botones__boton" href="/">Si, crear ahora</a>
                <a class="botones__boton" href="/">No, cancelar pedido</a>
            </div>
        </div> -->
    <section class="InformacionDelPedido grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <a class="enlace -primario" href="/">
                <?php echo file_get_contents("$root/assets/svg/folder.svg"); ?>
                <h6>Paquetes de graduación</h6>
            </a>
            <a class="etiqueta -primario" href="/">En espera</a>
        </nav>
        <div class="contenedorScroll">
            <form class="formulario" action="">
                <h1>Alumnos registrados: 2/8</h1>
                <div class="formulario__campo">
                    <div class="cajaTexto -normal">
                        <input type="email" placeholder="alumno@correo.com" name="nuevoCorreo">
                    </div>
                    <a class="botonIcono -primario" href="">
                        <?php echo file_get_contents("$root/assets/svg/mas.svg"); ?>
                    </a>
                </div>
                <div class="separador"></div>
                <div class="cajaTexto -grande -verificado">
                    <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    <a href="">
                        <?php echo file_get_contents("$root/assets/svg/verificado.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -error">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
                <div class="formulario__campo">
                    <div class="cajaTexto -grande -normal">
                        <input type="email" placeholder="alumno@correo.com" name="correoRegistrado">
                    </div>
                    <a class="botonIcono -negativo" href="">
                        <?php echo file_get_contents("$root/assets/svg/eliminar.svg"); ?>
                    </a>
                </div>
            </form>
        </div>
        <form class="formulario" action="">
            <label for="escuela">Escuela</label>
            <div class="cajaTexto -grande -normal">
                <input type="text" placeholder="Escuela">
            </div>
            <label for="carrera">Carrera</label>
            <div class="cajaTexto -grande -normal">
                <input type="text" placeholder="Carrera">
            </div>
            <label for="generacion">Generación</label>
            <div class="cajaTexto -grande -normal">
                <input type="text" placeholder="Generación">
            </div>
            <div class="formulario__botones">
                <a class="boton -primario -grande" href="">Guardar</a>
                <a class="boton -terciario -grande" href="">Cancelar</a>
            </div>
        </form>
    </section>
</main>

<?php require('./layouts/footer.php') ?>