<?php
    $nombre = $_GET['nombre']??'';
    if ($nombre == null) {
        print 'aleex.vt' . '<br>';
    } else {
        echo 'El nombre es: ' . trim($nombre, '/'). '<br>';
    }

    echo 'Longitud del nombre: ' . strlen($nombre) . '<br>';
    echo 'Nombre en mayúsculas: ' . strtoupper($nombre) . '<br>';
    echo 'Nombre en minúsculas: ' . strtolower($nombre) . '<br>';

    $prefijo = $_GET['prefijo']??'';
    $miprefijo = 'vic';
    $pos = strpos($prefijo, $miprefijo);
    if ($prefijo == null) {
        echo 'No hay prefijo';
    } else {
        if ($pos === false) {
            echo 'El nombre no contiene el prefijo del ejemplo' . '<br>';
        } else {
            echo 'El nombre contiene ese prefijo y está en la posición: ' . $pos . '<br>';
        }
    }
    
    
    echo substr_count(
        strtolower($nombre),
        'a',
    ) . '<br>';

    $existe = 'a';
    $pos1 = stripos($nombre, $existe);
    if ($pos1 === false) {
        echo 'No existe ninguna a <br>';
    } else {
        echo 'Existe una a en la posición ' . $pos1 . '<br>';
    }

    echo str_ireplace(
        'o',
        '0',
        $nombre
    )
?>