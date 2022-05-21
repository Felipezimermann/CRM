<?php

namespace app\controllers\Page;
use app\utils\View;
class Page
{
    public static function getPage($uri): string
    {
        if($uri == '/'){
            return self::home();
        }
        $uri = str_replace('/','',$uri);

        return self::{$uri}();
    }

    private static function viewMain(string $view,array $parameter = []): string
    {
        $viewPrincipal = [
            'loading'       => View::render('loading'),
            'view'          =>$view,
            'viewParameter' =>$parameter
        ];

    return View::render('page',$viewPrincipal);
    }

    private static function home(): string
    {
        $parameter = [
            'viewTitle'=>'Home'
        ];

        return self::viewMain('home',$parameter);
    }

    private static function errorHttp(): string
    {
        $parameter = [
            'viewTitle'=>'404'
        ];
        return self::viewMain('404',$parameter);
    }
}