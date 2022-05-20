<?php

function routes():array{
    return[
        '/'=>'Home@index',
        '/user/create'=>'user@create'
    ];
}
function router(){
    $uri = $_SERVER["REQUEST_URI"];

    $routes = routes();

    if(array_key_exists($uri, $routes)){
            echo $uri;
            print_r($routes);
    }
}
