/******************************************
 *  Author : Angel Maldonado
 *  Created On : Sun Jul 03 2022
 *  File : scripts.js
 *******************************************/
async function obtenerEmpleados() {
    const archivo = "empleados.json";

    // fetch(archivo)
    //     .then(resultado => resultado.json())
    //     .then(datos => {
    //         const { empleados } = datos;
    //         empleados.forEach(empleado => console.log(empleado));
    //     });

    const resultado = await fetch(archivo);
    const datos = await resultado.json();
    const { empleados } = datos;
    console.log(empleados);
}

obtenerEmpleados();
