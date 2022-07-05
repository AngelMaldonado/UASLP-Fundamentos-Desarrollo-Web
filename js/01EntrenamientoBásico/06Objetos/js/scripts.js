/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

const producto = {
    nombreProducto: "Monitor 20 pulgadas",
    precio: 300,
    disponible: true
}

console.log(producto.precio);
console.log(producto["precio"]);

// Agregar nuevas propiedades
producto.imagen = "img/monitor.jpg";

console.log(producto);

// Eliminar propiedades
delete producto.disponible;
console.log(producto);

// Destructuring (para obtener valores de un objeto)s
const precioProducto = producto.precio; // forma anterior

// Crea la variable precio y le asigna el valor del atributo del objeto
const { precio, nombreProducto } = producto; // forma nueva
console.log(precio);
console.log(nombreProducto);

// Metodos de Object
// tambien se puede usar el modo estricto para seguir
// buenas practicas (debe ir al inicio del archivo)
"use strict";
Object.freeze(producto); // Congela el objeto
Object.freeze(producto.nombreProducto); // Congela el atributo
Object.seal(producto); // Bloquea el objeto
producto.precio = 400; // No se puede modificar el valor de un atributo
console.log(producto);

// Unir dos objetos
const producto2 = {
    peso: "1kg",
    color: "rojo"
};

// Spread operator (...)
const nuevoProducto = { ...producto, ...producto2 };

console.log(nuevoProducto);
