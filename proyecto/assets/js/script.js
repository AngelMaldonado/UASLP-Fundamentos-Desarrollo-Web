/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Thu Jun 09 2022
 *  File : script.js
 *******************************************/

cargaScript('/assets/js/components/barraNavegacion.js');

function cargaScript(url) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;

    head.appendChild(script);
}
