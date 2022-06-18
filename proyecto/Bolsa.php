<?php require('./views/layouts/header.php'); ?>

<main>
    <section class="Bolsa">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <a class="enlace -primario" href="/">
                <?php echo file_get_contents("./assets/svg/folder.svg"); ?>
                <h6>Paquetes de graduación</h6>
            </a>
        </nav>
        <!-- <div class="Bolsa__vacia">
            <div class="iconoContenedor -primario -r50">
                <div class="contenedorResponsivo">
                    <?php echo file_get_contents("./assets/svg/emoji-triste.svg"); ?>
                </div>
            </div>
            <h3>
                Aún no hay productos en su bolsa
            </h3>
        </div> -->

        <div class="Bolsa__tarjetasBolsa">
            <?php require('./views/components/tarjetaBolsa.php'); ?>
            <?php require('./views/components/tarjetaBolsa.php'); ?>
            <?php require('./views/components/tarjetaBolsa.php'); ?>
            <?php require('./views/components/tarjetaBolsa.php'); ?>
            <?php require('./views/components/tarjetaBolsa.php'); ?>
        </div>
        <div class="Bolsa__talon">
            <h3>Total: $12000.00</h3>
            <br><br>
            <div class="talon__botones">
                <a class="boton -grande -terciario" href="">
                    <h6>Cancelar</h6>
                </a>
                <a class="boton -grande -primario" href="">
                    <h6>Continuar</h6>
                </a>
            </div>
        </div>
    </section>
</main>

<?php require("./views/layouts/footer.php"); ?>