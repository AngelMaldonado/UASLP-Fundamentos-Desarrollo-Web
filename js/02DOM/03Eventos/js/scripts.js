/******************************************
 *  Author : Angel Maldonado   
 *  Created On : Tue Jul 05 2022
 *  File : scripts.js
 *******************************************/

// Seleccionar elementos y asociarles un evento
const btnEnviar = document.querySelector(".boton--primario");

// Seleccionar los inputs y textarea
const datos = {
    nombre: "",
    email: "",
    mensaje: ""
};

const nombre = document.querySelector("#nombre");
const email = document.querySelector("#email");
const mensaje = document.querySelector("#mensaje");
const formulario = document.querySelector(".formulario");

window.addEventListener("load", () => {
    console.log("Ventana cargada con addEventLister");
});

window.onload = () => {
    console.log("Ventana cargada con window.onload");
};

document.addEventListener("DOMContentLoaded", () => {
    console.log("Documento cargado con addEventLister");
});

nombre.addEventListener("input", leerTexto);
email.addEventListener("input", leerTexto);
mensaje.addEventListener("input", leerTexto);

// Evento submit
formulario.addEventListener("submit", (evento) => {
    evento.preventDefault();
    // Validar el formulario
    if (nombre === "" || email === "" || mensaje === "") {
        mostrarError("Todos los campos son obligatorios", true);
        return;
    }

    // Alerta de enviar correctamente
    mostrarMensaje("Enviado correctamente");
});

function mostrarAlerta(mensaje, error = null) {
    const alerta = document.createElement("p");
    alerta.textContent = mensaje;
    if (error) {
        alerta.classList.add("error");
    } else {
        alerta.classList.add("correcto");
    }
    formulario.appendChild(alerta);
    setTimeout(() => {
        alerta.remove();
    }, 5000);
}

function leerTexto(e) {
    datos[e.target.id] = e.target.value;
}
