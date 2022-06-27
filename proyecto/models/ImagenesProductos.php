<?php

/******************************************
 * Author : @AngelMaldonado
 * Created On : Wed Jun 22 2022
 * File : ImagenesProductos.php
 *******************************************/
include_once("Excepciones.php");

class ImagenesProductos
{
    private $_FKproductoID;
    private $_imagenID;
    private $_imagen;

    public function __construct($_FKproductoID, $_imagen)
    {
        $this->_imagenID = null;
        $this->_FKproductoID = $_FKproductoID;
        $this->_imagen = base64_encode($_imagen);
    }
}
