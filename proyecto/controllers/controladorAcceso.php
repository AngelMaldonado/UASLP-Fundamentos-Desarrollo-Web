<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : controladorAcceso.php
 *******************************************/

include("../models/BDConexion.php");

try {
    $conexion = BDConexion::obtenConexion();
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["_method"] === "POST") {


        try {
            $query = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
            $query->bindParam(':correo', $correo, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() === 0) {
                echo "Usuario no encontrado";
                // header('Location: http://localhost/twitter/');
                // exit();
            }

            $user;

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $user = new User($row["id"], $row["username"], $row["password"], $row["photo"], $row["type"]);
            }

            if (!password_verify($password, $user->getPassword())) {
                echo "Contraseña inválida";
                exit();
            }

            session_start();

            $_SESSION["id"] = $user->getId();
            $_SESSION["username"] = $user->getUsername();
            $_SESSION["photo"] = $user->getPhoto();
            $_SESSION["type"] = $user->getType();

            header('Location: http://localhost/twitter/views/');
            exit();
        } catch (PDOException $e) {
            echo $e;
        }
    } else if ($_POST["_method"] === "DELETE") {
        session_start();

        session_destroy();

        header('Location: http://localhost/twitter/');

        exit();
    }
}
