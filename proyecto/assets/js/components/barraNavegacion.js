/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 15 2022
 *  File : barraNavegacion.js
 *******************************************/

let barraNavegacion = document.addEventListener('DOMContentLoaded', () => {
    const botonMenu = document.getElementsByClassName('menu')[0];
    const enlaces = document.getElementsByClassName('barraNavegacion__tabs');

    botonMenu.addEventListener('click', () => {
        enlaces[0].classList.toggle('activo');
        enlaces[1].classList.toggle('activo');
    });
});