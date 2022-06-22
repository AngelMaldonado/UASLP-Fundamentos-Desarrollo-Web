/******************************************
 *  Author : @AngelMaldonado
 *  Created On : Tue Jun 21 2022
 *  File : tarjetasUsuario.js
 *******************************************/
// Carga las tarjetas solo si se esta en la pagina de views/admin/Usuarios.php
if (window.location.href.includes('http://localhost/views/admin/Usuarios.php')) {
    window.onload = cargaTarjetasUsuario();
}

function cargaTarjetasUsuario() {
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET", "../../../controllers/controladorUsuarios.php/", true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                // console.log(this.responseText);
                let listaUsuarios = JSON.parse(this.responseText);
                pintaListaUsuarios(listaUsuarios);
            } else {
                console.log("Error");
            }
        }
    };
}

function pintaListaUsuarios(listaUsuarios) {
    let html = '';
    for (let i = 0; i < listaUsuarios.length; i++) {
        html +=
            `
            <div class="tarjetaUsuario">
                <img src="data:image/jpeg;base64,${listaUsuarios[i].foto}" alt="imagen-usuario">
                <div>
                    <h3>Nombre: <p>${listaUsuarios[i].nombre} (#${listaUsuarios[i].id})</p></h3>
                    <h3>Correo: <p>${listaUsuarios[i].correo}</p></h3>
                </div>
                <div>
                    <h3>Tel: <p>${listaUsuarios[i].tel}</p></h3>
                    <h3>Escuela: <p>${listaUsuarios[i].escuela}</p></h3>
                </div>
                <div>
                    <h3>Estudios: <p>${listaUsuarios[i].estudios}</p></h3>
                    <h3>Generación: <p>${listaUsuarios[i].generacion}</p></h3>
                </div>
                <form id="form${i}" action="/controllers/controladorUsuarios.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="${listaUsuarios[i].id}">
                    <input type="hidden" name="paginaAnterior" value="${window.location.href}">
                    <input type="hidden" name="nombre" value="${listaUsuarios[i].nombre}">
                    <input type="hidden" name="correo" value="${listaUsuarios[i].correo}">
                    <input type="hidden" name="tel" value="${listaUsuarios[i].tel}">
                    <input type="hidden" name="escuela" value="${listaUsuarios[i].escuela}">
                    <input type="hidden" name="estudios" value="${listaUsuarios[i].estudios}">
                    <input type="hidden" name="generacion" value="${listaUsuarios[i].generacion}">
                    <select name="tipoUsuario" class="cajaDesplegable -chico">
            `;
        switch (listaUsuarios[i].tipoUsuario) {
            case 'cliente':
                html += `
                    <option value="cliente" selected="selected">Cliente</option>
                    <option value="administrador">Administrador</option>
                    <option value="representante">Representante</option>
                `;
                break;
            case 'administrador':
                html += `
                    <option value="cliente">Cliente</option>
                    <option value="administrador" selected="selected">Administrador</option>
                    <option value="representante">Representante</option>
                `;
                break;
            case 'representante':
                html += `
                    <option value="cliente">Cliente</option>
                    <option value="administrador">Administrador</option>
                    <option value="representante" selected="selected">Representante</option>
                `;
                break;
        }
        html += `
                    </select>
                    <div>
                        <div class="-chico">
                            <input type="file" name="foto">
                        </div>
                        <a onclick="formSubmit('form${i}', 'UPDATE');" class="actualiza boton -positivo">
                            <h6>Guardar</h6>
                        </a>
                        <br>
                        <a onclick="formSubmit('form${i}', 'DELETE');" class="elimina boton -negativo">
                            <h6>Eliminar</h6>
                        </a>
                        <label for="foto">Foto</label>
                    </div>
                </form>
            </div>
        `;
    }

    document.getElementsByClassName("tarjetasUsuario")[0].innerHTML += html;
}

