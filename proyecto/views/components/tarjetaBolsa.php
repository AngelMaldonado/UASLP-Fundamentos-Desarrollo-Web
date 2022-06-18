<div class="tarjetaBolsa">
    <a class="tarjetaBolsa__producto" href="#">
        <img class="-t172" src="https://picsum.photos/1920" alt="">
        <p>Nombre del producto</p>
    </a>
    <div class="tarjetaBolsa__detalle">
        <h4>Precio</h4>
        <p>$1850.00</p>
    </div>
    <div class="tarjetaBolsa__detalle">
        <h4>Disponibles: 30</h4>
        <div class="controlNumerico">
            <a class="botonIcono -primario -grande" href="/">
                <?php echo file_get_contents("./assets/svg/menos.svg"); ?>
            </a>
            <p>1</p>
            <a class="botonIcono -primario -grande" href="/">
                <?php echo file_get_contents("./assets/svg/mas.svg"); ?>
            </a>
        </div>
    </div>
    <p>$2000.00</p>
    <div class="tarjetaBolsa__talon">
        <div>
            <a class="botonIcono -negativo -t32" href="#">
                <?php echo file_get_contents("./assets/svg/eliminar.svg"); ?>
            </a>
            <a class="botonIcono -secundario -t32" href="#">
                <?php echo file_get_contents("./assets/svg/editar.svg"); ?>
            </a>
        </div>
        <p>
            Personalizado
            <span class="icono -positivo -t20">
                <?php echo file_get_contents("./assets/svg/verificado.svg"); ?>
            </span>
        </p>
    </div>
</div>