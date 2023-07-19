<?php

function conectarDB(): mysqli|false {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');
    if(!$db) {
        echo '¡Error en la conexión con la base de datos!';
        exit;
    }
    return $db;
}
