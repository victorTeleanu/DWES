<?php
    $url = 'http://username:password@hostname:9090/path?arg=value';

    echo 'Protocolo: ' . parse_url($url, PHP_URL_SCHEME) . '<br>';
    echo 'Nombre de user: ' . parse_url($url, PHP_URL_USER) . '<br>';
    echo 'Path: ' . parse_url($url, PHP_URL_PATH) . '<br>';
    echo 'Querystring: ' . parse_url($url, PHP_URL_QUERY) . '<br>';
?>