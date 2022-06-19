/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Fri Jun 17 2022
 *  File : opcionRadio.js
 *******************************************/

const opcionesRadio = document.getElementsByClassName('opcionRadio');

for (var index = 0; index < opcionesRadio.length; index++) {
    opcionesRadio[index].setAttribute('tabindex', '0');
}