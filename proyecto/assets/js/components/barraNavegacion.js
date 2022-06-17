/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 15 2022
 *  File : barraNavegacion.js
 *******************************************/

function abreBarraNavegacion() {
    const enlaces = document.getElementsByClassName('barraNavegacion__tabs');
    enlaces[0].classList.toggle('activo');
    enlaces[1].classList.toggle('activo');
}