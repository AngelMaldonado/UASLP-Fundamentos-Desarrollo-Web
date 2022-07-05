/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

// Arreglo de productos
const carrito = [
    { nombre: "Monitor", precio: 200 },
    { nombre: "Teclado", precio: 100 },
    { nombre: "Audifonos", precio: 300 },
    { nombre: "Computadora", precio: 1000 },
    { nombre: "Mouse", precio: 50 }
]

// Foreach
carrito.forEach(producto => console.log(producto.nombre));

// Map, funciona para crear otro arreglo
const nombres = carrito.map(producto => producto.nombre);
console.log(nombres);
