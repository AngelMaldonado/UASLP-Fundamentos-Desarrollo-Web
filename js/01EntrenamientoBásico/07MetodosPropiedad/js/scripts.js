/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/

const reproductor = {
    reproducir: function (id) {
        console.log("Reproduciendo el video con id: " + id);
    }
}

reproductor.borrarCancion = function (id) {
    console.log("Borrando la canción con id: " + id);
}

reproductor.reproducir(100);
reproductor.borrarCancion(100);
