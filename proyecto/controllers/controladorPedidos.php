<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Wed Jun 22 2022
 * File : controladorPedidos.php
 *******************************************/

include('../models/BDConexion.php');
include('../models/Producto.php');

try {
    $conexion = new BDConexion();
} catch (PDOException $e) {
    echo $ex->getMessage();

    exit();
}

session_status() == PHP_SESSION_ACTIVE ? true : session_start();
// Para el GET no hace falta ser administrador ni que se haya iniciado sesión
// Metodos GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    //Obtener un solo registro
    if (array_key_exists("id", $_GET)) {
        try {
            $registro = $conexion->obtenRegistros("productos", "producto_ID=" . $_GET["id"])[0];
            $producto = Producto::ProductoDesdeRegistro($registro);
            echo json_encode($registro);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    } else {
        // Obtener TODOS los registros
        try {
            // TODO: mover estas instrucciones a la clase Usuario
            $registros = $conexion->obtenRegistros("productos", null);
            $productos = array();
            foreach ($registros as $registro) {
                $producto = Producto::ProductoDesdeRegistro($registro);
                $productos[] = $producto->obtenArreglo();
            }
            echo json_encode($productos);
            exit();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit();
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST" && $_SESSION['usuario_tipoUsuario'] === "administrador") {
    if ($_POST['_method'] === "POST") {
        try {
            $producto = Producto::nuevoProducto(
                $conexion,
                isset($_POST['nombre']) ? $_POST['nombre'] : null,
                isset($_POST['descripcion']) ? $_POST['descripcion'] : null,
                isset($_POST['costoProduccion']) ? (float)$_POST['costoProduccion'] : 0.0,
                isset($_POST['precioVenta']) ? (float)$_POST['precioVenta'] : 0.0,
                isset($_POST['stock']) ? (int)$_POST['stock'] : 0,
                isset($_POST['categoria']) ? $_POST['categoria'] : 'paquetes_graduacion',
                isset($_POST['personalizacion']) ? $_POST['personalizacion'] : null,
                isset($_POST['calificacion']) ? (float)$_POST['calificacion'] : 0.0
            );
        } catch (ExcepcionCamposRequeridos $ex) {
            header("location: ../views/admin/Inventario.php?error=registroVacio");
            exit();
        } catch (ExcepcionNombreInvalido $ex) {
            header("location: ../views/admin/Inventario.php?error=nombreInvalido");
            exit();
        } catch (ExcepcionProductoExistente $ex) {
            header("location: ../views/admin/Inventario.php?error=productoExistente");
            exit();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit();
        }

        try {
            $producto->registraProducto($conexion);
            header("location: ../views/admin/Inventario.php?error=registroExitoso");
            exit();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit();
        }

        // Si se va a eliminar el usuario
        // if ($_POST['_method'] === 'DELETE') {
        // No eliminar por completo el usuario, sino que cambiar el estado a inactivo
        //     $usuario->cambiaActivo(0);
        // }

        // Utiliza la nueva instancia de la clase para actualizar el registro en la BD
        // try {
        //     $usuario->actualizaUsuario($conexion, $_POST['id']);
        //     header("location: " . $_POST['paginaAnterior']); //. "?id=" . $_POST['id'] . "&op=update");
        //     exit();
        // } catch (Exception $ex) {
        //echo $ex->getMessage();
        //     header("location: " . $_POST['paginaAnterior']); //. "?id=-2&op=update");
        //     exit();
        // }
    } else if (isset($_POST['id'])) {
        try {
            // Crea una instancia para el producto que se va a actualizar
            $producto = Producto::ProductoUpdateDelete(
                $conexion,
                isset($_POST['nombre']) ? $_POST['nombre'] : null,
                isset($_POST['descripcion']) ? $_POST['descripcion'] : null,
                isset($_POST['costoProduccion']) ? (float)$_POST['costoProduccion'] : null,
                isset($_POST['precioVenta']) ? (float)$_POST['precioVenta'] : null,
                isset($_POST['stock']) ? (int)$_POST['stock'] : null,
                isset($_POST['categoria']) ? $_POST['categoria'] : 'paquetes_graduacion',
                isset($_POST['personalizacion']) ? $_POST['personalizacion'] : null,
                isset($_POST['calificacion']) ? (float)$_POST['calificacion'] : null
            );
        } catch (Exception $ex) {
            //echo $ex->getMessage();
            header("location: " . $_POST['paginaAnterior']); //. "?id=-1&op=update");
            exit();
        }

        // Si se va a eliminar el producto (verificar que no haya pedidos asociados)
        //if ($_POST['_method'] === 'DELETE') {
        // No eliminar por completo el usuario, sino que cambiar el estado a inactivo
        //$usuario->cambiaActivo(0);
        //}
        // Utiliza la nueva instancia de la clase para actualizar el registro en la BD
        try {
            $producto->actualizaProducto($conexion, $_POST['id']);
            header("location: " . $_POST['paginaAnterior']); //. "?id=" . $_POST['id'] . "&op=update");
            exit();
        } catch (Exception $ex) {
            //echo $ex->getMessage();
            header("location: " . $_POST['paginaAnterior']); //. "?id=-2&op=update");
            exit();
        }
    }
}
