<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Wed Jun 22 2022
 * File : Producto.php
 *******************************************/
include_once("Excepciones.php");

enum Categoria: string
{
    case paquetes_graduacion = 'paquetes_graduacion';
    case anillos = 'anillos';
    case promocionales = 'promocionales';
    case trofeos_reconocimientos = 'trofeos_reconocimientos';
    case renta_togas_birretes = 'renta_togas_birretes';
}

class Producto
{
    private $_id;
    private $_nombre;
    private $_descripcion;
    private $_costoProduccion;
    private $_precioVenta;
    private $_stock;
    private $_categoria;
    private $_personalizacion;
    private $_calificacion;

    /* Patron Factory */
    private function __construct()
    {
    }

    public static function ProductoUpdateDelete(
        $conexion,
        $nombre,
        $descripcion,
        $costoProduccion,
        $precioVenta,
        $stock,
        $categoria,
        $personalizacion,
        $calificacion
    ) {
        /* Valida los campos (arroja excepcion si hay alguno valido) */
        Producto::validaCampos(
            $conexion,
            $nombre,
            $descripcion,
            false
        );

        $producto = new Producto();
        $producto->_nombre = $nombre;
        $producto->_descripcion = $descripcion;
        $producto->_costoProduccion = $costoProduccion;
        $producto->_precioVenta = $precioVenta;
        $producto->_stock = $stock;
        switch ($categoria) {
            case 'paquetes_graduacion':
                $producto->_categoria = Categoria::paquetes_graduacion;
                break;
            case 'anillos':
                $producto->_categoria = Categoria::anillos;
                break;
            case 'promocionales':
                $producto->_categoria = Categoria::promocionales;
                break;
            case 'trofeos_reconocimientos':
                $producto->_categoria = Categoria::trofeos_reconocimientos;
                break;
            case 'renta_togas_birretes':
                $producto->_categoria = Categoria::renta_togas_birretes;
                break;
        }
        $producto->_personalizacion = $personalizacion;
        $producto->_calificacion = $calificacion;

        return $producto;
    }

    public static function ProductoDesdeRegistro($registro)
    {
        $producto = new Producto();
        $producto->_id = $registro['producto_ID'];
        $producto->_nombre = $registro['nombre'];
        $producto->_descripcion = $registro['descripcion'];
        $producto->_costoProduccion = $registro['costoProduccion'];
        $producto->_precioVenta = $registro['precioVenta'];
        $producto->_stock = $registro['stock'];
        switch ($registro['categoria']) {
            case 'paquetes_graduacion':
                $producto->_categoria = Categoria::paquetes_graduacion;
                break;
            case 'anillos':
                $producto->_categoria = Categoria::anillos;
                break;
            case 'promocionales':
                $producto->_categoria = Categoria::promocionales;
                break;
            case 'trofeos_reconocimientos':
                $producto->_categoria = Categoria::trofeos_reconocimientos;
                break;
            case 'renta_togas_birretes':
                $producto->_categoria = Categoria::renta_togas_birretes;
                break;
        }
        $producto->_personalizacion = $registro['personalizacion'];

        return $producto;
    }

    public static function nuevoProducto(
        $conexion,
        $nombre,
        $descripcion,
        $costoProduccion,
        $precioVenta,
        $stock,
        $categoria,
        $personalizacion,
        $calificacion
    ) {
        Producto::validaCampos(
            $conexion,
            $nombre,
            $descripcion,
            true
        );

        $nuevoProducto = new Producto();
        $nuevoProducto->_nombre = $nombre;
        $nuevoProducto->_descripcion = $descripcion;
        $nuevoProducto->_costoProduccion = $costoProduccion;
        $nuevoProducto->_precioVenta = $precioVenta;
        $nuevoProducto->_stock = $stock;
        switch ($categoria) {
            case 'paquetes_graduacion':
                $nuevoProducto->_categoria = Categoria::paquetes_graduacion;
                break;
            case 'anillos':
                $nuevoProducto->_categoria = Categoria::anillos;
                break;
            case 'promocionales':
                $nuevoProducto->_categoria = Categoria::promocionales;
                break;
            case 'trofeos_reconocimientos':
                $nuevoProducto->_categoria = Categoria::trofeos_reconocimientos;
                break;
            case 'renta_togas_birretes':
                $nuevoProducto->_categoria = Categoria::renta_togas_birretes;
                break;
        }
        $nuevoProducto->_personalizacion = $personalizacion;
        $nuevoProducto->_calificacion = $calificacion;

        return $nuevoProducto;
    }

    private static function validaCampos(
        $conexion,
        $nombre,
        $descripcion,
        $validarNombre
    ) {
        /* Valida los campos requeridos * */
        if (empty($nombre) || empty($descripcion)) {
            throw new ExcepcionCamposRequeridos();
        }
        /* Verifica que el nombre no este en la base de datos */
        if ($conexion->existeRegistro('productos', 'nombre', $nombre) !== false && $validarNombre) {
            throw new ExcepcionProductoExistente();
        }
        /* Valida el nombre completo */
        if (!preg_match("/^[a-zA-Z áéíóúüñÁÉÍÓÚÜÑ]*$/", $nombre)) {
            throw new ExcepcionNombreInvalido();
        }
    }

    public function obtenArreglo()
    {
        $arreglo = array();

        if ($this->_id !== null)                $arreglo["id"] =                    $this->_id;
        if ($this->_nombre !== null)            $arreglo["nombre"] =                $this->_nombre;
        if ($this->_descripcion !== null)       $arreglo["descripcion"] =           $this->_descripcion;
        if ($this->_costoProduccion !== null)   $arreglo["costoProduccion"] =       $this->_costoProduccion;
        if ($this->_precioVenta !== null)       $arreglo["precioVenta"] =           $this->_precioVenta;
        if ($this->_stock !== null)             $arreglo["stock"] =                 $this->_stock;
        if ($this->_categoria !== null)         $arreglo["categoria"] =             $this->_categoria->value;
        if ($this->_personalizacion !== null)   $arreglo["personalizacion"] =       $this->_personalizacion;
        if ($this->_calificacion !== null)      $arreglo["calificacion"] =          $this->_calificacion;

        return $arreglo;
    }

    public function actualizaProducto($conexion, $id)
    {
        $keys = self::obtenArreglo();
        $valores = array();

        /* Armar la estructura de los valores: campo='nuevoValor' */
        foreach ($keys as $key => $value) {
            $valores[] = "$key='" . $value . "'";
        }

        try {
            $conexion->actualizaRegistro('productos', $valores, "producto_ID=$id");
        } catch (ExcepcionErrorDeConsulta $ex) {
            throw new Exception('Error en la actualizacion del usuario!\n' . $ex->getMessage());
        }
    }

    public function registraProducto($conexion)
    {
        $keys = self::obtenArreglo();
        $campos = array_keys($keys);
        $valores = array();
        /* Armar la estructura de los valores: campo='nuevoValor' */
        foreach ($keys as $key => $value) {
            $valores[] = "'" . $value . "'";
        }

        try {
            $conexion->insertaRegistro('productos', $campos, $valores);
        } catch (ExcepcionErrorDeConsulta $ex) {
            throw new Exception('Error en la creación del producto!\n' . $ex->getMessage());
        }
    }
}
