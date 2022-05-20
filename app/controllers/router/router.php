<?php

function routes():array
{
    return require 'routes.php';
}

function exactMatchUriInArrayRoutes(string $uri,array $routes ): array
{
    if(array_key_exists($uri, $routes)){
        return ['teste'];
    }
    return [];
}

function router()
{
    $uri = $_SERVER["REQUEST_URI"];

    $routes = routes();

    $matchedUri = exactMatchUriInArrayRoutes($uri,$routes);

    print_r($matchedUri);


}
