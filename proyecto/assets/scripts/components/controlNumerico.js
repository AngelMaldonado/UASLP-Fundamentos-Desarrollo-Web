/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 22 2022
 *  File : controlNumerico.js
 *******************************************/

function actualizaControl(valor, controlNumerico) {
    let control = document.getElementById(controlNumerico);
    if (parseInt(control.value) + valor != 0) {
        control.value = parseInt(control.value) + valor;
    }
}