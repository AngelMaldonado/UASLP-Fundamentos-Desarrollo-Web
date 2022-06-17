<?php require('./views/layouts/header.php'); ?>

<main>
    <section class="PersonalizacionProducto grid1f2c">
        <nav class="navegacionPagina">
            <a class="botonIcono -primario -r50" href="">
                <?php echo file_get_contents("./assets/svg/flecha-izquierda.svg"); ?>
            </a>
            <ul class="navegacionPagina__ruta">
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/dashboard.svg"); ?>
                        <h6>Productos y servicios</h6>
                        <?php echo file_get_contents("./assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/folder.svg"); ?>
                        <h6>Paquetes de graduación</h6>
                        <?php echo file_get_contents("./assets/svg/diamante-derecha.svg"); ?>
                    </a>
                </li>
                <li>
                    <a class="enlace -primario" href="/">
                        <?php echo file_get_contents("./assets/svg/archivo.svg"); ?>
                        <h6>Productos y servicios</h6>
                    </a>
                </li>
            </ul>
        </nav>
        <form class="formulario">
            <div class="exhibidor">
                <img class="exhibidor__actual" src="https://picsum.photos/1920" alt="imagen actual">
            </div>
            <header class="formulario__titulo">
                <h1>Paquete de graduación diamante</h1>
                <?php require('./views/components/controlEstrellas.php'); ?>
                <h3>$1850.00</h3>
            </header>
            <div class="formulario__disponibilidad">
                <h3>Disponibles: 30</h3>
                <div class="controlNumerico">
                    <a class="botonIcono -primario -grande" href="/">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icono-menos">
                                <path id="Vector" d="M2 10C2 9.73478 2.10536 9.48043 2.29289 9.29289C2.48043 9.10536 2.73478 9 3 9H17C17.2652 9 17.5196 9.10536 17.7071 9.29289C17.8946 9.48043 18 9.73478 18 10C18 10.2652 17.8946 10.5196 17.7071 10.7071C17.5196 10.8946 17.2652 11 17 11H3C2.73478 11 2.48043 10.8946 2.29289 10.7071C2.10536 10.5196 2 10.2652 2 10Z" />
                            </g>
                        </svg>
                    </a>
                    <p>1</p>
                    <a class="botonIcono -primario -grande" href="/">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icono-mas">
                                <path id="Union" d="M10.75 3C10.75 2.58579 10.4142 2.25 10 2.25C9.58579 2.25 9.25 2.58579 9.25 3V9.25H3C2.58579 9.25 2.25 9.58579 2.25 10C2.25 10.4142 2.58579 10.75 3 10.75H9.25V17C9.25 17.4142 9.58579 17.75 10 17.75C10.4142 17.75 10.75 17.4142 10.75 17V10.75H17C17.4142 10.75 17.75 10.4142 17.75 10C17.75 9.58579 17.4142 9.25 17 9.25H10.75V3Z" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </form>
        <div class="contenedorScroll">
            <form class="formulario" action="">
                <label for="foto-agradecimiento">Foto del agradecimiento</label>
                <select class="cajaDesplegable -grande -normal" name="foto-agradecimiento" id="">
                    <option value="familiar">Familiar</option>
                    <option value="individual">Individual</option>
                    <option value="placa con texto">Placa con texto</option>
                </select>
                <label for="color">Color</label>
                <select class="cajaDesplegable -grande -normal" name="color" id="">
                    <option value="vino">Vino</option>
                    <option value="negro">Negro</option>
                    <option value="robotico">Robotico</option>
                    <option value="cristal">Cristal</option>
                    <option value="chocolate">Chocolate</option>
                    <option value="café">Café</option>
                </select>
                <h4>Escudo</h4>
                <div class="cajaOpcionesRadio">
                    <label class="opcionRadio -grande -normal" for="escultura">
                        <input type="radio" name="escudo" id="escultura" value="escultura">
                        Escultura
                    </label>
                    <label class="opcionRadio -grande -normal" for="metal">
                        <input type="radio" name="escudo" id="metal" value="metal">
                        Metal
                    </label>
                    <label class="opcionRadio -grande -normal" for="grabado">
                        <input type="radio" name="escudo" id="grabado" value="grabado">
                        Grabado
                    </label>
                </div>
                <h4>Foto en papel</h4>
                <div class="cajaOpcionesRadio">
                    <label class="opcionRadio -grande -normal" for="formal">
                        <input type="radio" name="fotoPapel" id="formal" value="formal">
                        Formal
                    </label>
                    <label class="opcionRadio -grande -normal" for="uniforme">
                        <input type="radio" name="fotoPapel" id="uniforme" value="uniforme">
                        Uniforme
                    </label>
                    <label class="opcionRadio -grande -normal" for="chusca">
                        <input type="radio" name="fotoPapel" id="chusca" value="chusca">
                        Chusca
                    </label>
                </div>
                <h4>Anillo (oro o plata)</h4>
                <div class="cajaOpcionesRadio">
                    <label class="opcionRadio -grande -normal" for="oro">
                        <input type="radio" name="tipoAnillo" id="oro" value="oro">
                        Oro
                    </label>
                    <label class="opcionRadio -grande -normal" for="plata">
                        <input type="radio" name="tipoAnillo" id="plata" value="plata">
                        Plata
                    </label>
                </div>
                <h4>Escudo de anillo</h4>
                <div class="cajaOpcionesRadio">
                    <label class="opcionRadio -grande -normal" for="escuela">
                        <input type="radio" name="escudoAnillo" id="escuela" value="escuela">
                        Escuela
                    </label>
                    <label class="opcionRadio -grande -normal" for="carrera">
                        <input type="radio" name="escudoAnillo" id="carrera" value="carrera">
                        Carrera
                    </label>
                    <label class="opcionRadio -grande -normal" for="facultad">
                        <input type="radio" name="escudoAnillo" id="facultad" value="facultad">
                        Facultad
                    </label>
                </div>
                <label for="medida-anillo">Medida del anillo</label>
                <select class="cajaDesplegable -grande -normal" name="medida-anillo" id="">
                    <option value="32mm">32mm</option>
                    <option value="64mm">64mm</option>
                    <option value="122mm">122mm</option>
                    <option value="132mm">132mm</option>
                </select>
                <div>
                    <a class="boton -primario -grande -normal" href="">Guardar</a>
                    <a class="boton -terciario -grande -normal" href="">Cancelar</a>
                </div>
            </form>
</main>

<?php require('./views/layouts/footer.php'); ?>