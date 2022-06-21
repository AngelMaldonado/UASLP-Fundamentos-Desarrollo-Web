/******************************************
 *  Author : @AngelMaldonado
 *  Created On : Sun Jun 19 2022
 *  File : boton.js
 *******************************************/

document.getElementById("submit").onclick = function () {
    document.getElementsByTagName("form")[0].submit();
}

let formularios = document.getElementsByTagName("form");
for (let i = 0; i < formularios.length; i++) {
    let botonesSubmit = formularios[i].getElementsByClassName("submit");
    for (let j = 0; j < botonesSubmit.length; j++) {
        botonesSubmit[j].onclick = function () {
            if (botonesSubmit[j].classList.contains("actualiza")) {
                formularios[i].innerHTML += "<input type='hidden' name='_method' value='UPDATE'>";
            } else if (botonesSubmit[j].classList.contains("elimina")) {
                formularios[i].innerHTML += "<input type='hidden' name='_method' value='DELETE'>";
            }
            formularios[i].submit();
        }
    }
}