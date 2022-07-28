<?php

function conexionBD(): mysqli|null
{
    $bd = mysqli_connect('localhost', 'root', 'root', 'appsalon');
    if (!$bd) {
        return null;
    } else {
        return $bd;
    }
}

