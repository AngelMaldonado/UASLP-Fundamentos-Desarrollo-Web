/******************************************
 *  Author : @AngelMaldonado   
 *  Created On : Wed Jun 22 2022
 *  File : tarjetaPerfil.js
 *******************************************/

// Carga las tarjetas solo si se esta en la pagina de views/admin/Usuarios.php
if (window.location.href.includes('http://localhost/views/Perfil.php')) {
    let idUsuario = window.location.href.split('?')[1].split('=')[1];
    window.onload = cargaPerfil(idUsuario);
}

function cargaPerfil(id) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../../controllers/controladorUsuarios.php?id=" + id, true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let usuario = JSON.parse(this.responseText);
                // console.log(this.responseText);
                pintaTarjetaPerfil(usuario);
            } else {
                console.log("Error");
            }
        }
    };
}

function pintaTarjetaPerfil(usuario) {
    document.getElementById('saludoUsuario').innerHTML = "Hola, " + usuario.nombre.split(" ")[0];
    document.getElementById('imagenUsuario').innerHTML =
        `
        <img src="data:image/jpeg;base64,${usuario.foto}" class="-r50" alt="imagen-usuario">
        `;
    document.getElementById('tipoDeUsuario').innerHTML = "Tipo de usuario: " + usuario.tipoUsuario;
    document.getElementById('nombreUsuario').value = usuario.nombre;
    document.getElementById('correoUsuario').value = usuario.correo;
    document.getElementById('telUsuario').value = usuario.tel;
    document.getElementById('estudiosUsuario').value = usuario.estudios;
    document.getElementById('generacionUsuario').value = usuario.generacion;
    console.log(usuario);
}