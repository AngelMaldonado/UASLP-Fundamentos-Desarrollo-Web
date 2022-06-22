/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 22 2022
 *  File : producto.js
 *******************************************/

// Carga las tarjetas solo si se esta en la pagina de views/admin/Usuarios.php
if (window.location.href.includes('http://localhost/views/VerProducto.php')) {
    let idProducto = window.location.href.split('?')[1].split('=')[1];
    window.onload = cargaProducto(idProducto);
}

function cargaProducto(id) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../../controllers/controladorProductos.php?id=" + id, true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let producto = JSON.parse(this.responseText);
                pintaProducto(producto);
            } else {
                console.log("Error");
            }
        }
    };
}

// TODO: Pintar el controlador de estrellas
function pintaProducto(producto) {
    switch (producto.categoria) {
        case 'paquetes_graduacion':
            document.getElementById("categoriaProducto").innerHTML += "Paquetes de graduación";
            break;
        case 'anillos':
            document.getElementById("categoriaProducto").innerHTML += "Anillos";
            break;
    }
    document.getElementById("rutaNombreProducto").innerHTML += producto.nombre;
    document.getElementById("principalNombreProducto").innerHTML += producto.nombre;
    document.getElementById("principalPrecioVenta").innerHTML += "$" + producto.precioVenta;
    document.getElementById("principalDisponibles").innerHTML += "Disponibles: " + producto.stock;
    document.getElementById("principalDescripcion").innerHTML += producto.descripcion;
}
