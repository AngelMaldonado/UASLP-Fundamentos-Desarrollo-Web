/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

function Cliente(nombre, apellido) {
    this.nombre = nombre;
    this.apellido = apellido;
}

Cliente.prototype.formatearCliente = function () {
    return `${this.nombre} ${this.apellido}`;
}

const cliente = new Cliente("Angel", "Maldonado");
console.log(cliente.formatearCliente());
