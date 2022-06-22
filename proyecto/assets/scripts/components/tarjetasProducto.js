/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 22 2022
 *  File : tarjetasProducto.js
 *******************************************/

// Carga las tarjetas solo si se esta en la pagina de views/admin/Usuarios.php
if (window.location.href.includes('http://localhost/views/ProductosYServicios.php')) {
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

// TODO: Pintar el controlador de estrellas
function pintaListaProductos(listaProductos) {
    let html = '';
    for (let i = 0; i < listaProductos.length; i++) {
        html +=
            `
            <div class="tarjetaProducto">
                <header class="tarjetaProducto__titulo">
                    <h1>${listaProductos[i].nombre}</h1>
                </header>
                <div class="tarjetaFiltro">
                    <h2>$${listaProductos[i].precioVenta}</h2>
                    <?php require('controlEstrellas.php'); ?>
                    <a class="boton -secundario -mediano" href="/views/VerProducto.php?id=${listaProductos[i].id}">Ver detalles</a>
                </div>
            </div>
        `;
    }

    document.getElementsByClassName("tarjetasProductos")[0].innerHTML += html;
}

