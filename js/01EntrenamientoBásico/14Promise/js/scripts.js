/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

const usuarioAutenticado = new Promise((resolve, reject) => {
    const auth = false;
    if (auth) {
        resolve("Usuario autenticado");
    } else {
        reject("No se pudo iniciar sesion");
    }
});

usuarioAutenticado
    .then(resultado => console.log(resultado))
    .catch(error => console.log(error));

// En los Promises existen 3 estados:
// Pending: no se ha cumplido pero tampoco se ha rechazado
// Fulfilled: se ha cumplido
// Rejected: se ha rechazado

// Notification API
const boton = document.querySelector('#boton');
boton.addEventListener("click", () => {
    Notification.requestPermission()
        .then(resultado => console.log(`El usuario acepto notificaciones: ${resultado}`));
})

if (Notification.permission == "granted") {
    new Notification("Nueva notificación", {
        icon: "img/ccj.png",
        body: "Esta es una notificación"
    })
}
