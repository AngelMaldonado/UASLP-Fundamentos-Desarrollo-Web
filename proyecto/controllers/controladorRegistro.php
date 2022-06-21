<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : controladorRegistro.php
 *******************************************/

include('../models/BDConexion.php');
include('../models/Usuario.php');

try {
    $conexion = new BDConexion();
} catch (PDOException $e) {
    echo $ex->getMessage();

    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["_method"] === "POST") {
        try {
            $nuevoUsuario = Usuario::nuevoUsuario(
                $conexion,
                $_POST['nombre'],
                $_POST['correo'],
                $_POST['pswd'],
                $_POST['repswd'],
                $_POST['telefono'],
                $_POST['escuela'],
                $_POST['estudios'],
                $_POST['generacion'],
                TipoUsuario::cliente,
                null // Foto
            );
        } catch (ExcepcionCamposRequeridos $ex) {
            header("location: ../views/Registro.php?error=registroVacio");
            exit();
        } catch (ExcepcionNombreInvalido $ex) {
            header("location: ../views/Registro.php?error=nombreInvalido");
            exit();
        } catch (ExcepcionCorreoInvalido $ex) {
            header("location: ../views/Registro.php?error=correoInvalido");
            exit();
        } catch (ExcepcionTelefonoInvalido $ex) {
            header("location: ../views/Registro.php?error=telefonoInvalido");
            exit();
        } catch (ExcepcionEstudiosInvalido $ex) {
            header("location: ../views/Registro.php?error=estudiosInvalido");
            exit();
        } catch (ExcepcionEscuelaInvalida) {
            header("location: ../views/Registro.php?error=escuelaInvalida");
            exit();
        } catch (ExcepcionGeneracionInvalida $ex) {
            header("location: ../views/Registro.php?error=generacionInvalida");
            exit();
        } catch (ExcepcionPswdsNoCoinciden $ex) {
            header("location: ../views/Registro.php?error=pswdsNoCoinciden");
            exit();
        } catch (ExcepcionPswdInvalida $ex) {
            header("location: ../views/Registro.php?error=pswdInvalida");
            exit();
        } catch (ExcepcionCorreoExistente $ex) {
            header("location: ../views/Registro.php?error=correoExistente");
            exit();
        }

        try {
            $nuevoUsuario->registraUsuario($conexion);
            header("location: ../views/Registro.php?error=registroExitoso");
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit();
        }
        // if (sizeof($_FILES) > 0) {
        //     $tmp_name = $_FILES["photo"]["tmp_name"];

        //     $photo = file_get_contents($tmp_name);
        // }
    }
}
