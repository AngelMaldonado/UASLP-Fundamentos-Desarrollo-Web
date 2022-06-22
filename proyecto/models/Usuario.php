<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : Usuario.php
 *******************************************/
include_once("Excepciones.php");

enum TipoUsuario: string
{
    case cliente = 'cliente';
    case representante = 'representante';
    case administrador = 'administrador';
}

class Usuario
{
    private $_id;
    private $_nombre;
    private $_correo;
    private $_pswd;
    private $_tel;
    private $_escuela;
    private $_estudios;
    private $_generacion;
    private $_tipoUsuario;
    private $_foto;
    private $_activo;

    /* Patron Factory */
    private function __construct()
    {
    }

    /** Para preparar la actualizacion de un usuario */
    public static function UsuarioUpdateDelete(
        $conexion,
        $nombre,
        $correo,
        $pswd,
        $repswd,
        $tel,
        $escuela,
        $estudios,
        $generacion,
        $tipoUsuario,
        $foto,
    ) {
        /* Valida los campos (arroja excepcion si hay alguno valido) */
        Usuario::validaCampos(
            $conexion,
            $nombre,
            $correo,
            $pswd,
            $repswd,
            $tel,
            $escuela,
            $estudios,
            $generacion,
            $tipoUsuario,
            $foto,
            false
        );

        $usuario = new Usuario();
        // Encripta la contrasena
        $usuario->_id = null;
        $usuario->_nombre = $nombre;
        $usuario->_correo = $correo;
        $usuario->_pswd = $pswd;
        $usuario->_tel = $tel;
        $usuario->_escuela = $escuela;
        $usuario->_estudios = $estudios;
        $usuario->_generacion = $generacion;
        if ($tipoUsuario == 'cliente') {
            $usuario->_tipoUsuario = TipoUsuario::cliente;
        } else if ($tipoUsuario == 'representante') {
            $usuario->_tipoUsuario = TipoUsuario::representante;
        } else if ($tipoUsuario == 'administrador') {
            $usuario->_tipoUsuario = TipoUsuario::administrador;
        }
        $usuario->_foto = $foto;
        $usuario->_activo = 1;

        return $usuario;
    }

    // Para consultar a todos los usuarios
    public static function UsuarioDesdeRegistro($registro)
    {
        $usuario = new Usuario();
        $usuario->_id = $registro["usuario_ID"];
        $usuario->_nombre = $registro["nombre"];
        $usuario->_correo = $registro["correo"];
        $usuario->_pswd = null;
        $usuario->_tel = $registro["tel"];
        $usuario->_escuela = $registro["escuela"];
        $usuario->_estudios = $registro["estudios"];
        $usuario->_generacion = $registro["generacion"];
        if ($registro["tipoUsuario"] == 'cliente') {
            $usuario->_tipoUsuario = TipoUsuario::cliente;
        } else if ($registro["tipoUsuario"] == 'representante') {
            $usuario->_tipoUsuario = TipoUsuario::representante;
        } else if ($registro["tipoUsuario"] == 'administrador') {
            $usuario->_tipoUsuario = TipoUsuario::administrador;
        }
        $usuario->_foto = $registro["foto"];
        $usuario->_activo = $registro["activo"];
        return $usuario;
    }

    public static function Usuario($conexion, $correo, $pswd)
    {
        /* Valida los campos */
        if (empty($correo) || empty($pswd)) {
            throw new ExcepcionCamposRequeridos();
        }
        /* Valida el correo */
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new ExcepcionCorreoInvalido();
        }
        /* Valida la contrasena */
        if (strlen($pswd) < 14) {
            throw new ExcepcionPswdInvalida();
        }
        /* Verifica que el correo SI este en la base de datos */
        try {
            $registro = $conexion->existeRegistro('usuarios', 'correo', $correo);
            if ($registro !== false) {
                $usuario = new Usuario();
                $usuario->_correo = $registro["correo"];
                $usuario->_pswd = $registro["pswd"];
                /* Valida la contrasena */
                if (password_verify($pswd, $usuario->_pswd)) {
                    /* Obten el resto de los datos del usuario */
                    $usuario->_id = $registro["usuario_ID"];
                    $usuario->_nombre = $registro["nombre"];
                    $usuario->_tel = $registro["tel"];
                    $usuario->_escuela = $registro["escuela"];
                    $usuario->_estudios = $registro["estudios"];
                    $usuario->_generacion = $registro["generacion"];
                    $usuario->_tipoUsuario = $registro["tipoUsuario"];
                    $usuario->_foto = $registro["foto"];
                    $usuario->_activo = $registro["activo"];
                } else {
                    throw new ExcepcionPswdInvalida();
                }
            } else {
                throw new ExcepcionCorreoInexistente();
            }
        } catch (ExcepcionErrorDeConsulta $ex) {
            throw new Exception('Error en la tabla del usuario!\n' . $ex->getMessage());
        }

        return $usuario;
    }

    /**
     * TODO:aumentar seguridad de la contrasena */
    public static function nuevoUsuario(
        $conexion,
        $nombre,
        $correo,
        $pswd,
        $repswd,
        $tel,
        $escuela,
        $estudios,
        $generacion,
        $tipoUsuario,
        $foto,
    ) {
        /* Valida los campos (arroja excepcion si hay alguno valido) */
        Usuario::validaCampos(
            $conexion,
            $nombre,
            $correo,
            $pswd,
            $repswd,
            $tel,
            $escuela,
            $estudios,
            $generacion,
            $tipoUsuario,
            $foto,
            true
        );

        $nuevoUsuario = new Usuario();
        // Encripta la contrasena
        $pswd = password_hash($pswd, PASSWORD_DEFAULT);
        $nuevoUsuario->_id = null;
        $nuevoUsuario->_nombre = $nombre;
        $nuevoUsuario->_correo = $correo;
        $nuevoUsuario->_pswd = $pswd;
        $nuevoUsuario->_tel = $tel;
        $nuevoUsuario->_escuela = $escuela;
        $nuevoUsuario->_estudios = $estudios;
        $nuevoUsuario->_generacion = $generacion;
        if ($tipoUsuario == 'cliente') {
            $nuevoUsuario->_tipoUsuario = TipoUsuario::cliente;
        } else if ($tipoUsuario == 'representante') {
            $nuevoUsuario->_tipoUsuario = TipoUsuario::representante;
        } else if ($tipoUsuario == 'administrador') {
            $nuevoUsuario->_tipoUsuario = TipoUsuario::administrador;
        }
        $nuevoUsuario->_foto = $foto;
        $nuevoUsuario->_activo = 1;

        return $nuevoUsuario;
    }

    // TODO: validar tipo de usuario y foto
    private static function validaCampos(
        $conexion,
        $nombre,
        $correo,
        $pswd,
        $repswd,
        $tel,
        $escuela,
        $estudios,
        $generacion,
        $tipoUsuario,
        $foto,
        $validarCorreo
    ) {
        /* Valida los campos requeridos * */
        if ($pswd !== null || $repswd !== null)
            if (empty($nombre) || empty($correo) || empty($pswd) || empty($repswd)) {
                throw new ExcepcionCamposRequeridos();
            }
        /* Valida el nombre completo */
        if (!preg_match("/^[a-zA-Z áéíóúüñÁÉÍÓÚÜÑ]*$/", $nombre)) {
            throw new ExcepcionNombreInvalido();
        }
        /* Valida el correo */
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new ExcepcionCorreoInvalido();
        }
        /* Valida el telefono */
        if (!preg_match("/^[0-9]{10}$/", $tel) && !empty($tel)) {
            throw new ExcepcionTelefonoInvalido();
        }
        /* Valida los estudios */
        if (!preg_match("/^[a-zA-Z áéíóúüñÁÉÍÓÚÜÑ]*$/", $estudios) && !empty($estudios)) {
            throw new ExcepcionEstudiosInvalido();
        }
        /* Valida la escuela */
        if (!preg_match("/^[a-zA-Z áéíóúüñÁÉÍÓÚÜÑ]*$/", $escuela) && !empty($escuela)) {
            throw new ExcepcionEscuelaInvalida();
        }
        /* Valida la generacion */
        if (!preg_match("/^[0-9]{4}-[0-9]{4}$/", $generacion) && !empty($generacion)) {
            throw new ExcepcionGeneracionInvalida();
        }
        if ($pswd !== null && $repswd !== null) {
            /* Valida ambas contrasenas */
            if ($pswd !== $repswd) {
                throw new ExcepcionPswdsNoCoinciden();
            }
            /* Valida la seguridad de la contrasena */
            if (strlen($pswd) < 14) {
                throw new ExcepcionPswdInvalida();
            }
        }
        /* Verifica que el correo no este en la base de datos */
        if ($conexion->existeRegistro('usuarios', 'correo', $correo) !== false && $validarCorreo) {
            throw new ExcepcionCorreoExistente();
        }
    }

    public function cambiaActivo($nuevoActivo)
    {
        $this->_activo = $nuevoActivo;
    }

    public function obtenArreglo()
    {
        $arreglo = array();

        if ($this->_id !== null)            $arreglo["id"] =            $this->_id;
        if ($this->_nombre !== null)        $arreglo["nombre"] =        $this->_nombre;
        if ($this->_correo !== null)        $arreglo["correo"] =        $this->_correo;
        if ($this->_pswd !== null)          $arreglo["pswd"] =          $this->_pswd;
        if ($this->_tel !== null)           $arreglo["tel"] =           $this->_tel;
        if ($this->_escuela !== null)       $arreglo["escuela"] =       $this->_escuela;
        if ($this->_estudios !== null)      $arreglo["estudios"] =      $this->_estudios;
        if ($this->_generacion !== null)    $arreglo["generacion"] =    $this->_generacion;
        if ($this->_tipoUsuario !== null)   $arreglo["tipoUsuario"] =   $this->_tipoUsuario->value;
        if ($this->_foto !== null)          $arreglo["foto"] =          $this->_foto;
        if ($this->_activo !== null)        $arreglo["activo"] =        $this->_activo;

        return $arreglo;
    }

    // TODO: refactorizar para mayor robustez
    /**
     * @brief Funcion para actualizar todos los campos del usuario con determinado ID utilizando los valores de la instancia de la clase.
     * @param $conexion Conexion a la base de datos
     * @param $datos array() con los datos en orden de la base de datos: nombre, correo, pswd, tel, escuela, estudios, generacion, tipoUsuario, foto
     */
    public function actualizaUsuario($conexion, $id)
    {
        $keys = self::obtenArreglo();
        $valores = array();

        /* Armar la estructura de los valores: campo='nuevoValor' */
        foreach ($keys as $key => $value) {
            $valores[] = "$key='" . $value . "'";
        }

        try {
            $conexion->actualizaRegistro('usuarios', $valores, "usuario_ID=$id");
        } catch (ExcepcionErrorDeConsulta $ex) {
            throw new Exception('Error en la actualizacion del usuario!\n' . $ex->getMessage());
        }
    }

    public function logueaUsuario()
    {
        if (session_start()) {
            $_SESSION['usuario_id'] = $this->_id;
            $_SESSION['usuario_nombre'] = $this->_nombre;
            $_SESSION['usuario_correo'] = $this->_correo;
            $_SESSION['usuario_pswd'] = $this->_pswd;
            $_SESSION['usuario_tel'] = $this->_tel;
            $_SESSION['usuario_escuela'] = $this->_escuela;
            $_SESSION['usuario_estudios'] = $this->_estudios;
            $_SESSION['usuario_generacion'] = $this->_generacion;
            $_SESSION['usuario_tipoUsuario'] = $this->_tipoUsuario;
            $_SESSION['usuario_foto'] = $this->_foto;
        } else {
            throw new ExcepcionErrorDeSesion();
        }
    }

    public function registraUsuario($conexion)
    {
        try {
            $campos = array('nombre', 'correo', 'pswd', 'tel', 'escuela', 'estudios', 'generacion', 'tipoUsuario', 'foto');
            $valores = array(
                "'" . $this->_nombre . "'",
                "'" . $this->_correo . "'",
                "'" . $this->_pswd . "'",
                "'" . $this->_tel . "'",
                "'" . $this->_escuela . "'",
                "'" . $this->_estudios . "'",
                "'" . $this->_generacion . "'",
                "'" . $this->_tipoUsuario->value . "'",
                "'" . $this->_foto . "'" // Cambiar por archivo de foto (BLOB)
            );
            $conexion->insertaRegistro('usuarios', $campos, $valores);
        } catch (ExcepcionErrorDeConsulta $ex) {
            throw new Exception('Error en la creación del usuario!\n' . $ex->getMessage());
        }
    }
}
