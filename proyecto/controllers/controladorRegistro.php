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
            if ($_POST['tipoUsuario'] == 'administrador') {
                $nuevoUsuario = Usuario::nuevoUsuario(
                    $conexion,
                    $_POST['nombre'],
                    $_POST['correo'],
                    $_POST['pswd'],
                    $_POST['repswd'],
                    null,
                    null,
                    null,
                    null,
                    TipoUsuario::administrador,
                    null // Foto
                );
            } else {
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
            }
        } catch (ExcepcionCamposRequeridos $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=registroVacio");
            } else {
                header("location: ../views/Registro.php?error=registroVacio");
            }
            exit();
        } catch (ExcepcionNombreInvalido $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=nombreInvalido");
            } else {
                header("location: ../views/Registro.php?error=nombreInvalido");
            }
            exit();
        } catch (ExcepcionCorreoInvalido $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=correoInvalido");
            } else {
                header("location: ../views/Registro.php?error=correoInvalido");
            }
            exit();
        } catch (ExcepcionTelefonoInvalido $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=telefonoInvalido");
            } else {
                header("location: ../views/Registro.php?error=telefonoInvalido");
            }
            exit();
        } catch (ExcepcionEstudiosInvalido $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=estudiosInvalido");
            } else {
                header("location: ../views/Registro.php?error=estudiosInvalido");
            }
            exit();
        } catch (ExcepcionEscuelaInvalida) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=escuelaInvalida");
            } else {
                header("location: ../views/Registro.php?error=escuelaInvalida");
            }
            exit();
        } catch (ExcepcionGeneracionInvalida $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=generacionInvalida");
            } else {
                header("location: ../views/Registro.php?error=generacionInvalida");
            }
            exit();
        } catch (ExcepcionPswdsNoCoinciden $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=pswdsNoCoinciden");
            } else {
                header("location: ../views/Registro.php?error=pswdsNoCoinciden");
            }
            exit();
        } catch (ExcepcionPswdInvalida $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=pswdInvalida");
            } else {
                header("location: ../views/Registro.php?error=pswdInvalida");
            }
            exit();
        } catch (ExcepcionCorreoExistente $ex) {
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=correoExistente");
            } else {
                header("location: ../views/Registro.php?error=correoExistente");
            }
            exit();
        }

        try {
            $nuevoUsuario->registraUsuario($conexion);
            if ($_POST['tipoUsuario'] == 'administrador') {
                header("location: ../views/admin/Usuarios.php?error=registroExitoso");
            } else {
                header("location: ../views/Registro.php?error=registroExitoso");
            }
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
