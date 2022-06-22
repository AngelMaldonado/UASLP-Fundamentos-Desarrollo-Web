/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 22 2022
 *  File : tarjetasInventario.js
 *******************************************/

// Carga las tarjetas solo si se esta en la pagina de views/admin/Usuarios.php
if (window.location.href.includes('http://localhost/views/admin/Inventario.php')) {
    window.onload = cargaTarjetasProducto();
}

function cargaTarjetasProducto() {
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET", "../../../controllers/controladorProductos.php", true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let listaProductos = JSON.parse(this.responseText);
                pintaListaProductos(listaProductos);
            } else {
                console.log("Error");
            }
        }
    };
}

function pintaListaProductos(listaProductos) {
    let html = '';
    for (let i = 0; i < listaProductos.length; i++) {
        html +=
            `
            <div class="tarjetaProducto">
                <form id="form${i}" action="/controllers/controladorProductos.php" method="POST">
                    <input type="hidden" name="id" value="${listaProductos[i].id}">
                    <input type="hidden" name="paginaAnterior" value="${window.location.href}">
                    <header class="tarjetaProducto__titulo">
                        <div class="cajaTexto -chico -normal">
                            <input type="text" value="${listaProductos[i].nombre}" name="nombre">
                        </div>
                    </header>
                    <div class="tarjetaFiltro">
                        <label for="descripcion">Descripción</label>
                        <div class="cajaTexto -chico -normal">
                            <input type="text" value="${listaProductos[i].descripcion}" name="descripcion">
                        </div>
                        <label for="costoProduccion">Costo de producción</label>
                        <div class="cajaTexto -chico -normal">
                            <input type="number" value="${listaProductos[i].costoProduccion}" name="costoProduccion" min=1 step="0.01">
                        </div>
                        <label for="precioVenta">Precio de venta</label>
                        <div class="cajaTexto -chico -normal">
                            <input type="number" value="${listaProductos[i].precioVenta}" name="precioVenta" min=1 step="0.01">
                        </div>
                        <label for="categoria">Categoría</label>
                        <select class="cajaDesplegable -chico -normal" name="categoria">
                        `;
        switch (listaProductos[i].categoria) {
            case 'paquetes_graduacion':
                html += `
                        <option value="paquetes_graduacion" selected="selected">Paquetes de graduación</option>
                        <option value="anillos">Anillos</option>
                        <option value="promocionales">Promocionales</option>
                        <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes">Renta de togas y birretes</option>
                    `;
                break;
            case 'anillos':
                html += `
                        <option value="paquetes_graduacion">Paquetes de graduación</option>
                        <option value="anillos" selected="selected">Anillos</option>
                        <option value="promocionales">Promocionales</option>
                        <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes">Renta de togas y birretes</option>
                    `;
                break;
            case 'promocionales':
                html += `
                        <option value="paquetes_graduacion">Paquetes de graduación</option>
                        <option value="anillos">Anillos</option>
                        <option value="promocionales" selected="selected">Promocionales</option>
                        <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes">Renta de togas y birretes</option>
                    `;
                break;
            case 'trofeos_reconocimientos':
                html += `
                        <option value="paquetes_graduacion">Paquetes de graduación</option>
                        <option value="anillos">Anillos</option>
                        <option value="promocionales">Promocionales</option>
                        <option value="trofeos_reconocimientos" selected="selected">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes">Renta de togas y birretes</option>
                    `;
                break;
            case 'renta_togas_birretes':
                html += `
                        <option value="paquetes_graduacion">Paquetes de graduación</option>
                        <option value="anillos">Anillos</option>
                        <option value="promocionales">Promocionales</option>
                        <option value="trofeos_reconocimientos">Trofeos y reconocimientos</option>
                        <option value="renta_togas_birretes" selected="selected">Renta de togas y birretes</option>
                    `;
                break;
        }
        html += `
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
                        <a onclick="formSubmit('form${i}', 'UPDATE');" class="boton -positivo -chico">Guardar</a>
                        <a onclick="formSubmit('form${i}', 'DELETE');" class="boton -negativo -chico">Eliminar</a>
                    </div>
                </form>
            </div>
        `;
    }

    document.getElementsByClassName("tarjetasInventario")[0].innerHTML += html;
}

