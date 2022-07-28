<?php
require('database.php');

function obtenerServicios(): array
{
    try {
        // Importar conexión
        $bd = conexionBD();

        // Escribir consulta SQL
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($bd, $sql);

        // Obtener resultados
        $servicios = [];
        $i = 0;

        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }

        return $servicios;

    } catch (Throwable $th) {
        var_dump($th);
        return [];
    }
}
