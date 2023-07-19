/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto() {
        return `${this.nombre} - ${this.precio}`;
    }
}

class Libro extends Producto {
    constructor(nombre, precio, autor) {
        super(nombre, precio);
        this.autor = autor;
    }

    formatearProducto() {
        return `${super.formatearProducto()} - ${this.autor}`;
    }
}

const producto = new Producto("Computadora", 1000);
console.log(producto);
console.log(producto.formatearProducto());
const libro = new Libro("Juegos del hambre", 500, "J.R.R. Tolkien");
console.log(libro.formatearProducto());
