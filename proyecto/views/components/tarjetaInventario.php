<div class="tarjetaProducto">
    <form action="/controllers/controladorProductos.php" method="POST">
        <header class="tarjetaProducto__titulo">
            <div class="cajaTexto -chico -normal">
                <input type="text" value="Nombre del producto" name="nombre">
            </div>
        </header>
        <div class="tarjetaFiltro">
            <label for="descripcion">Descripcion del producto</label>
            <div class="cajaTexto -chico -normal">
                <input type="text" placeholder="Descripcion" name="descripcion">
            </div>
            <label for="costoProduccion">Costo de producción</label>
            <div class="cajaTexto -chico -normal">
                <input type="number" value="1000.00" name="costoProduccion" min=1 step="0.01">
            </div>
            <label for="precioVenta">Precio de venta</label>
            <div class="cajaTexto -chico -normal">
                <input type="number" value="1000.00" name="precioVenta" min=1 step="0.01">
            </div>
            <label for="categoria">Categoría</label>
            <select class="cajaDesplegable -chico -normal" name="categoria">
                <option value="paquetes_graduacion">Paquetes de graduación</option>
                <option value="anillos">Anillos</option>
                <option value="promocionales">Promocionales</option>
                <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                <option value="renta_togas_birretes">Renta de togas y birretes</option>
            </select>
            <label for="stock">Stock</label>
            <div class="cajaTexto -chico -normal">
                <input type="number" value="1" name="stock" min=1 step="1">
            </div>
            <label for="foto1">Foto 1</label>
            <div class="-chico">
                <input type="file" name="foto1">
            </div>
            <label for="foto2">Foto 2</label>
            <div class="-chico">
                <input type="file" name="foto2">
            </div>
            <label for="foto3">Foto 3</label>
            <div class="-chico">
                <input type="file" name="foto3">
            </div>
            <a onclick="formSubmit('form${i}', 'UPDATE');" class="boton -positivo -chico" href="/views/VerProducto.php">Guardar</a>
            <a onclick="formSubmit('form${i}', 'DELETE');" class="boton -negativo -chico" href="/views/VerProducto.php">Eliminar</a>
        </div>
    </form>
</div>