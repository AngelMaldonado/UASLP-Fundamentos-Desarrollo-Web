<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : controladorAcceso.php
 *******************************************/

include('../models/BDConexion.php');
include('../models/Usuario.php');

try {
    $conexion = new BDConexion();
} catch (PDOException $ex) {
    echo $ex->getMessage();

    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["_method"] === "POST") {
        try {
            $loginUsuario = Usuario::Usuario(
                $conexion,
                $_POST['correo'],
                $_POST['pswd'],
            );
        } catch (ExcepcionCamposRequeridos $ex) {
            header("location: ../views/IniciarSesion.php?error=registroVacio");
            exit();
        } catch (ExcepcionCorreoInvalido $ex) {
            header("location: ../views/IniciarSesion.php?error=correoInvalido");
            exit();
        } catch (ExcepcionCorreoInexistente $ex) {
            header("location: ../views/IniciarSesion.php?error=correoInexistente");
            exit();
        } catch (ExcepcionPswdInvalida $ex) {
            header("location: ../views/IniciarSesion.php?error=pswdInvalida");
            exit();
        }

        try {
            $loginUsuario->logueaUsuario($conexion);
            header("location: ../");
        } catch (ExcepcionErrorDeSesion $ex) {
            header("location: ../views/IniciarSesion.php?error=errorDeSesion");
            exit();
        }
    } else if ($_POST["_method"] === "DELETE") {
        session_start();

        session_destroy();

        header('Location: ../');

        exit();
    }
}
