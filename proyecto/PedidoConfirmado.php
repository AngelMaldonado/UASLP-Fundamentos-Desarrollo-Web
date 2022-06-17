<?php require('./views/layouts/header.php'); ?>

<main>
    <section class="PedidoConfirmado">
        <div class="iconoContenedor -primario -r50">
            <div class="contenedorResponsivo">
                <?php echo file_get_contents("./assets/svg/verificado.svg") ?>
            </div>
        </div>
        <h3>
            Su pedido ha sido creado correctamente, podrá editarlo en su perfil antes de que el 95% de los alumnos que
            invitó hayan confirmado.
        </h3>
        <div class="botones">
            <a class="boton -primario -grande" href="/">Volver al inicio</a>
            <a class="boton -secundario -grande" href="/">Ver pedido</a>
        </div>
    </section>
</main>

<?php require('./views/layouts/footer.php'); ?>