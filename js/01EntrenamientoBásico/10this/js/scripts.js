/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

const reservacion = {
    nombre: "Angel",
    edad: 30,
    total: 5000,
    pagado: false,

    informacion: function () {
        console.log(`Nombre: ${this.nombre}`);
    }
}

const reservacion2 = {
    nombre: "Pedro",
    edad: 30,
    total: 5000,
    pagado: false,
    // Se requiere sintaxis de function, porque el arrow
    // hace referencia a la ventana GLOBAL
    informacion: function () {
        console.log(`Nombre: ${this.nombre}`);
    }
}

reservacion.informacion();
reservacion2.informacion();
