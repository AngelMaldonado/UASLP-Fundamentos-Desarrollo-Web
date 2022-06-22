<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Tue Jun 21 2022
 * File : controladorUsuarios.php
 *******************************************/

include('../models/BDConexion.php');
include('../models/Usuario.php');

try {
    $conexion = new BDConexion();
} catch (PDOException $e) {
    echo $ex->getMessage();

    exit();
}

session_start();
// Si la sesion es de usuario administrador
if ($_SESSION['usuario_tipoUsuario'] === "administrador") {
    // Metodos GET
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        //Obtener un solo registro
        if (array_key_exists("id", $_GET)) {
            // try {
            //     $id = $_GET["id"];

            //     $query = $connection->prepare('SELECT * FROM tweets WHERE id = :id');
            //     $query->bindParam(':id', $id, PDO::PARAM_INT);
            //     $query->execute();

            //     $tweet;

            //     while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            //         $tweet = new Tweet($row['id'], $row['text'], $row['timestamp'], $row['active']);
            //     }

            //     echo json_encode($tweet->getArray());
            // } catch (PDOException $e) {
            //     echo $e;
            // }
        } else {
            // Obtener TODOS los registros
            try {
                // TODO: mover estas instrucciones a la clase Usuario
                $registros = $conexion->obtenRegistros("usuarios", "activo=1");
                $usuarios = array();
                foreach ($registros as $registro) {
                    $usuario = Usuario::UsuarioDesdeRegistro($registro);
                    $usuarios[] = $usuario->obtenArreglo();
                }
                echo json_encode($registros);
            } catch (Exception $ex) {
                echo $ex->getMessage();
                exit();
            }
        }
    } else if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['id'])) {
            try {
                $foto = "";
                // TODO: corregir bug de foto vacia
                if ($_FILES["foto"] > 0) {
                    $tmp_name = $_FILES["foto"]["tmp_name"];
                    $foto = file_get_contents($tmp_name);
                } else {
                    $foto = $conexion->existeRegistro("usuarios", "usuario_ID", $_POST['id'])["foto"];
                }
                // Crea una instancia para el usuario que se va a actualizar
                $usuario = Usuario::UsuarioUpdateDelete(
                    $conexion,
                    isset($_POST['nombre']) ? $_POST['nombre'] : null,
                    isset($_POST['correo']) ? $_POST['correo'] : null,
                    isset($_POST['pswd']) ? $_POST['pswd'] : null,
                    isset($_POST['repswd']) ? $_POST['repswd'] : null,
                    isset($_POST['tel']) ? $_POST['tel'] : null,
                    isset($_POST['escuela']) ? $_POST['escuela'] : null,
                    isset($_POST['estudios']) ? $_POST['estudios'] : null,
                    isset($_POST['generacion']) ? $_POST['generacion'] : null,
                    isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : null,
                    $foto > 0 ? $foto : null
                );
            } catch (Exception $ex) {
                echo $ex->getMessage();
                // header("location: " . $_POST['paginaAnterior']); //. "?id=-1&op=update");
                exit();
            }

            // Si se va a eliminar el usuario
            if ($_POST['_method'] === 'DELETE') {
                // No eliminar por completo el usuario, sino que cambiar el estado a inactivo
                $usuario->cambiaActivo(0);
            }
            // Utiliza la nueva instancia de la clase para actualizar el registro en la BD
            try {
                $usuario->actualizaUsuario($conexion, $_POST['id']);
                header("location: " . $_POST['paginaAnterior']); //. "?id=" . $_POST['id'] . "&op=update");
                exit();
            } catch (Exception $ex) {
                echo $ex->getMessage();
                // header("location: " . $_POST['paginaAnterior'] . "?id=-2&op=update");
                exit();
            }
        }
    }
}
