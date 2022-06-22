<?php require('./layouts/header.php'); ?>

<main>
    <section class="PedidoConfirmado">
        <div class="iconoContenedor -primario -r50">
            <div class="contenedorResponsivo">
                <?php echo file_get_contents("$root/assets/svg/verificado.svg") ?>
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

<?php require('./layouts/footer.php'); ?>