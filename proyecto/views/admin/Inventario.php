<?php require('../layouts/dashboard_header.php'); ?>

<main>
    <section class="Inventario">
        <form id="nuevoProducto" class="formulario" action="/controllers/controladorProductos.php" method="POST">
            <input type="hidden" name="_method" value="POST">
            <h1>Nuevo producto</h1>
            <div class="campos">
                <div>
                    <label for="nombre">Nombre del producto</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="text" placeholder="Nombre" name="nombre">
                    </div>
                </div>
                <div>
                    <label for="descripcion">Descripcion del producto</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="text" placeholder="Descripcion" name="descripcion">
                    </div>
                </div>
            </div>
            <div class="campos">
                <div>
                    <label for="costoProduccion">Costo de producción</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="number" value="1000.00" name="costoProduccion" min=1 step="0.01">
                    </div>
                </div>
                <div>
                    <label for="precioVenta">Precio de venta</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="number" value="1000.00" name="precioVenta" min=1 step="0.01">
                    </div>
                </div>
            </div>
            <div class="campos">
                <div>
                    <label for="categoria">Categoría</label>
                    <select class="cajaDesplegable -grande -normal" name="categoria">
                        <option value="paquetes_graduacion">Paquetes de graduación</option>
                        <option value="anillos">Anillos</option>
                        <option value="promocionales">Promocionales</option>
                        <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes">Renta de togas y birretes</option>
                    </select>
                </div>
                <div>
                    <label for="stock">Stock</label>
                    <div class="cajaTexto -grande -normal">
                        <input type="number" value="1" name="stock" min=1 step="1">
                    </div>
                </div>
            </div>
            <div class="campos">
                <div>
                    <label for="foto1">Foto 1</label>
                    <div class="-chico">
                        <input type="file" name="foto1">
                    </div>
                </div>
                <div>
                    <label for="foto2">Foto 2</label>
                    <div class="-chico">
                        <input type="file" name="foto2">
                    </div>
                </div>
                <div>
                    <label for="foto3">Foto 3</label>
                    <div class="-chico">
                        <input type="file" name="foto3">
                    </div>
                </div>
            </div>
            <div>
                <a onclick="formSubmit('nuevoProducto', '');" class="boton -positivo -grande">Agregar</a>
            </div>
        </form>
    </section>
    <section class="tarjetasInventario grid4c">
        <!-- /assets/scripts/components/tarjetasInventario.js -->
    </section>
    <nav class="paginas">
        <a class="enlace -primario -grande" href="/">
            <?php echo file_get_contents("$root/assets/svg/diamante-izquierda.svg"); ?>
            Anterior
        </a>
        <ul>
            <li><a class="enlace -primario" href="/">1</a></li>
            <li><a class="enlace -primario" href="/">2</a></li>
            <li><a class="enlace -primario" href="/">3</a></li>
        </ul>
        <a class="enlace -primario -grande" href="/">
            Siguiente
            <?php echo file_get_contents("$root/assets/svg/diamante-derecha.svg"); ?>
        </a>
    </nav>
    <?php
    if ($_GET['id'] == '-3') {
        echo '<script>alert("Solo se pueden agregar 3 imagenes al producto");</script>';
    }
    ?>
</main>