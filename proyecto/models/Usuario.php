<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Sun Jun 19 2022
 * File : Usuario.php
 *******************************************/

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

    /* Patron Factory */
    private function __construct()
    {
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
        $foto
    ) {
        /* Valida los campos requeridos * */
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
        /* Valida ambas contrasenas */
        if ($pswd !== $repswd) {
            throw new ExcepcionPswdsNoCoinciden();
        }
        /* Valida la seguridad de la contrasena */
        if (strlen($pswd) < 14) {
            throw new ExcepcionPswdInvalida();
        }
        /* Verifica que el correo no este en la base de datos */
        if ($conexion->existeRegistro('usuarios', 'correo', $correo) !== false) {
            throw new ExcepcionCorreoExistente();
        }

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
        $nuevoUsuario->_tipoUsuario = $tipoUsuario;
        $nuevoUsuario->_foto = $foto;

        return $nuevoUsuario;
    }

    public function logueaUsuario($conexion)
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

/*
███████╗██╗░░██╗░█████╗░███████╗██████╗░░█████╗░██╗░█████╗░███╗░░██╗███████╗░██████╗
██╔════╝╚██╗██╔╝██╔══██╗██╔════╝██╔══██╗██╔══██╗██║██╔══██╗████╗░██║██╔════╝██╔════╝
█████╗░░░╚███╔╝░██║░░╚═╝█████╗░░██████╔╝██║░░╚═╝██║██║░░██║██╔██╗██║█████╗░░╚█████╗░
██╔══╝░░░██╔██╗░██║░░██╗██╔══╝░░██╔═══╝░██║░░██╗██║██║░░██║██║╚████║██╔══╝░░░╚═══██╗
███████╗██╔╝╚██╗╚█████╔╝███████╗██║░░░░░╚█████╔╝██║╚█████╔╝██║░╚███║███████╗██████╔╝
╚══════╝╚═╝░░╚═╝░╚════╝░╚══════╝╚═╝░░░░░░╚════╝░╚═╝░╚════╝░╚═╝░░╚══╝╚══════╝╚═════╝░
*/

class ExcepcionCamposRequeridos extends Exception
{
    public function __construct($code = 0, Exception $previous = null)
    {
        parent::__construct("Faltan campos requeridos", $code, $previous);
    }
}

class ExcepcionNombreInvalido extends Exception
{
    public function __construct($code = 1, Exception $previous = null)
    {
        parent::__construct("Nombre invalido", $code, $previous);
    }
}

class ExcepcionCorreoInvalido extends Exception
{
    public function __construct($code = 2, Exception $previous = null)
    {
        parent::__construct("Correo invalido", $code, $previous);
    }
}

class ExcepcionTelefonoInvalido extends Exception
{
    public function __construct($code = 3, Exception $previous = null)
    {
        parent::__construct("Telefono invalido", $code, $previous);
    }
}

class ExcepcionEstudiosInvalido extends Exception
{
    public function __construct($code = 4, Exception $previous = null)
    {
        parent::__construct("Carrera invalida", $code, $previous);
    }
}

class ExcepcionEscuelaInvalida extends Exception
{
    public function __construct($code = 5, Exception $previous = null)
    {
        parent::__construct("Escuela invalida", $code, $previous);
    }
}

class ExcepcionGeneracionInvalida extends Exception
{
    public function __construct($code = 6, Exception $previous = null)
    {
        parent::__construct("Generacion invalida", $code, $previous);
    }
}

class ExcepcionPswdsNoCoinciden extends Exception
{
    public function __construct($code = 7, Exception $previous = null)
    {
        parent::__construct("Las contrasenas no coinciden", $code, $previous);
    }
}

class ExcepcionPswdInvalida extends Exception
{
    public function __construct($code = 8, Exception $previous = null)
    {
        parent::__construct("Contrasena invalida", $code, $previous);
    }
}

class ExcepcionCorreoExistente extends Exception
{
    public function __construct($code = 9, Exception $previous = null)
    {
        parent::__construct("Correo existente", $code, $previous);
    }
}

class ExcepcionCorreoInexistente extends Exception
{
    public function __construct($code = 10, Exception $previous = null)
    {
        parent::__construct("Correo inexistente", $code, $previous);
    }
}

class ExcepcionErrorDeSesion extends Exception
{
    public function __construct($code = 11, Exception $previous = null)
    {
        parent::__construct("Error de sesion", $code, $previous);
    }
}
