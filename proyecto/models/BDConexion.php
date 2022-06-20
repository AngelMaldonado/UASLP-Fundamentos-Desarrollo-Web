<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : BDConexion.php
 *******************************************/

class BDConexion
{
    private static $conexion;

    // Constructor
    public function __construct()
    {
        if (self::$conexion == null) {
            self::obtenConexion();
        }
    }

    public static function obtenConexion()
    {
        /** Patron singleton, no debe haber mas de 1 conexion a la BD */
        if (self::$conexion == null) {
            self::$conexion = new PDO('mysql:host=localhost;dbname=industria_emblematica;charset=utf8', 'root', '');
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        }
        return self::$conexion;
    }

    public function existeRegistro($tabla, $campo, $valor)
    {
        $sql = "SELECT * FROM $tabla WHERE $campo = :valor";
        try {
            $query = self::$conexion->prepare($sql);
            $query->bindParam(':valor', $valor, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
                echo "Existe";
                exit();
            } else {
                return false;
            }
        } catch (PDOException $e) {
            throw new ExcepcionErrorDeConsulta($sql);
        }
    }

    /**
     * @brief Inserta un nuevo registro en la tabla indicada con los datos del array
     * @param $tabla Nombre de la tabla (string)
     * @param $campos Array con los nombres de los campos (array) - Ejemplo: array('nombre', 'apellido', 'edad')
     * @param $valores Array con los valores de los campos (array) - Ejemplo: array("'Juan'", "'Perez'", "'23'")
     * @return bool True si se inserto correctamente, de lo contrario arroja una Excepcion de Error de Consulta
     */
    public function insertaRegistro($tabla, $campos, $valores)
    {
        $campos = implode(',', $campos);
        $valores = implode(',', $valores);
        $sql = "INSERT INTO $tabla ($campos) VALUES ($valores)";

        try {
            $query = self::$conexion->prepare($sql);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            throw new ExcepcionErrorDeConsulta($sql . '\nPDOException: ' . $e->getMessage());
        }
    }
}

/*
███████╗██╗░░██╗░█████╗░███████╗██████╗░░█████╗░██╗░█████╗░███╗░░██╗███████╗░██████╗
██╔════╝╚██╗██╔╝██╔══██╗██╔════╝██╔══██╗██╔══██╗██║██╔══██╗████╗░██║██╔════╝██╔════╝
█████╗░░░╚███╔╝░██║░░╚═╝█████╗░░██████╔╝██║░░╚═╝██║██║░░██║██╔██╗██║█████╗░░╚█████╗░
██╔══╝░░░██╔██╗░██║░░██╗██╔══╝░░██╔═══╝░██║░░██╗██║██║░░██║██║╚████║██╔══╝░░░╚═══██╗
███████╗██╔╝╚██╗╚█████╔╝███████╗██║░░░░░╚█████╔╝██║╚█████╔╝██║░╚███║███████╗██████╔╝
╚══════╝╚═╝░░╚═╝░╚════╝░╚══════╝╚═╝░░░░░░╚════╝░╚═╝░╚════╝░╚═╝░░╚══╝╚══════╝╚═════╝░
*/

class ExcepcionErrorDeConsulta extends Exception
{
    public function __construct($consulta, $code = 0, Exception $previous = null)
    {
        parent::__construct("Error en la consulta sql: " . $consulta, $code, $previous);
    }
}

class ExcepcionRegistroExistente extends Exception
{
    public function __construct($code = 0, Exception $previous = null)
    {
        parent::__construct("Registro ya existe en la base de datos", $code, $previous);
    }
}
