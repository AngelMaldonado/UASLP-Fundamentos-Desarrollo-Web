/******************************************
 *  Author : Angel Maldonado   
 *  Created On : Tue Jul 05 2022
 *  File : scripts.js
 *******************************************/

// createElement
const nuevoEnlace = document.createElement("a");
// Agregar el href
nuevoEnlace.href = "nuevo-enlace.html";
// Agregar el texto
nuevoEnlace.textContent = "Un nuevo enlace";
// Agregar la clase
nuevoEnlace.classList.add("navegacion__enlace");
// Agregar al documento
const navegacion = document.querySelector(".navegacion");
navegacion.appendChild(nuevoEnlace);

