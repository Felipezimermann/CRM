<?php



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
                return  \app\controllers\Page\Page::getPage($uri);
            case 'bootstrap':
                $file = __DIR__."/../../public".$uri;
               return file_exists($file)?file_get_contents($file):'';
        }

    }
    return \app\controllers\Page\Page::getPage('errorHttp');
}

function router():string
{
    $uri = $_SERVER["REQUEST_URI"];
    $routes = routes();
    return exactMatchUriInArrayRoutes($uri,$routes);;
}
