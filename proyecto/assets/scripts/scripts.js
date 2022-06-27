/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Thu Jun 09 2022
 *  File : script.js
 *******************************************/

cargaScript('/assets/scripts/components/barraNavegacion.js');
cargaScript('/assets/scripts/components/opcionRadio.js');
cargaScript('/assets/scripts/components/tarjetasUsuario.js');
cargaScript('/assets/scripts/components/tarjetasInventario.js');
cargaScript('/assets/scripts/components/tarjetasProducto.js');
cargaScript('/assets/scripts/components/producto.js');
cargaScript('/assets/scripts/components/controlNumerico.js');
cargaScript('/assets/scripts/components/tarjetaPerfil.js');

function cargaScript(url) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;

    head.appendChild(script);
}

function formSubmit(formId, operation) {
    let form = document.getElementById(formId);
    if (operation.length > 0) {
        let op = document.createElement('input');
        op.type = 'hidden';
        op.name = '_method';
        switch (operation) {
            case 'UPDATE':
                op.value = operation;
                form.appendChild(op);
                break;
            case 'DELETE':
                op.value = operation;
                form.appendChild(op);
                break;
        }
    }
    document.getElementById(formId).submit();
}
