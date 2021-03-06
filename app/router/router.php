<?php

use \app\controllers\Page\Page;
use app\controllers\uploadFile\UploadFile;
use app\controllers\client\Client;

function routes():array
{
    return require 'routes.php';
}

function exactMatchUriInArrayRoutes(string $uri,array $routes )
{

    if(array_key_exists($uri, $routes)){
        $router = $routes[$uri];
        switch ($router){
            case 'Page':
                return  Page::getPage($uri);
            case 'UploadFile':
              $method = explode('/',$uri) ;
              return  UploadFile::action($method);
            case 'Client':
              $method = explode('/',$uri) ;
              return  Client::action($method);
            case 'public':
                $file = __DIR__."/../../public".$uri;
               return file_exists($file)?file_get_contents($file):Page::getPage('errorHttp');;
        }
    }
    return Page::getPage('errorHttp');
}

function router():string
{
    $uri = $_SERVER["REQUEST_URI"];
    $uriArray = explode('/',$uri) ;

    switch ($uriArray[1]){
        case 'bootstrap';
        case 'images':
        case 'js':
        case 'css':
            $routes = [$uri=>'public'];
            break;
        default:
            $routes = routes();
            break;
    }
    return exactMatchUriInArrayRoutes($uri,$routes);
}
