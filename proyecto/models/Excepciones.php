<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Wed Jun 22 2022
 * File : Excepciones.php
 *******************************************/

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

class ExcepcionProductoExistente extends Exception
{
    public function __construct($code = 12, Exception $previous = null)
    {
        parent::__construct("El nombre del producto ya está registrado", $code, $previous);
    }
}
