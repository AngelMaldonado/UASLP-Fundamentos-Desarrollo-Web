<?php require('./layouts/header.php'); ?>

<main>
    <section class="Pago grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("$root/assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <ul class="navegacionPagina__ruta">
                <a class="enlace -primario" href="/">
                    <?php echo file_get_contents("$root/assets/svg/folder.svg"); ?>
                    <h6>Paquetes de graduación</h6>
                    <?php echo file_get_contents("$root/assets/svg/diamante-derecha.svg"); ?>
                </a>
                <a class="enlace -primario" href="/">
                    <?php echo file_get_contents("$root/assets/svg/folder.svg"); ?>
                    <h6>Pago</h6>
                </a>
            </ul>
        </nav>
        <form class="formulario" action="">
            <h1>¿Cómo desea pagar?</h1>
            <div class="cajaOpcionesRadio">
                <label class="opcionRadio -grande -normal" for="anticipo">
                    <input type="radio" name="cantidadPago" id="anticipo" value="anticipo">
                    Anticipo
                </label>
                <label class="opcionRadio -grande -normal" for="pagoTotal">
                    <input type="radio" name="cantidadPago" id="pagoTotal" value="pagoTotal">
                    Pago total
                </label>
            </div>
            <h1>Método de pago</h1>
            <div class="cajaOpcionesRadio">
                <label class="opcionRadio -grande -normal" for="pagoEnLinea">
                    <input type="radio" name="metodoPago" id="pagoEnLinea" value="pagoEnLinea">
                    Pago en linea
                </label>
                <label class="opcionRadio -grande -normal" for="efectivo">
                    <input type="radio" name="metodoPago" id="efectivo" value="efectivo">
                    Efectivo
                </label>
                <label class="opcionRadio -grande -normal" for="depositoTransferencia">
                    <input type="radio" name="metodoPago" id="depositoTransferencia" value="depositoTransferencia">
                    Depósito/transferencia
                </label>
            </div>
        </form>
        <div class="Pago__informacion">
            <div class="informacion__total">
                <div class="iconoContenedor -primario -r50">
                    <div class="contenedorResponsivo">
                        <?php echo file_get_contents("$root/assets/svg/graduacion.svg"); ?>
                    </div>
                </div>
                <h3>Total: $20000.00</h3>
            </div>
            <div class="informacion__pago">
                <h1>Información de pago</h1>
                <h3>Cuenta: 5579-0900-4197-2119</h3>
                <h3>CLABE: 111 - 222 - 333 - 444</h3>
            </div>
            <div class="informacion__botones">
                <a class="boton -terciario -grande" href="#">Cancelar</a>
                <a class="boton -primario -grande" href="#">Confirmar</a>
            </div>
        </div>
    </section>
</main>

<?php require('./layouts/footer.php'); ?>