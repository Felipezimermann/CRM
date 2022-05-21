<?php
namespace app\utils;

class View
{
    private static function getContentView(string $view,$parameters):string
    {

        $file = __DIR__."/../../public/views/$view.php";
        return  require $file;
    }
    public static function render(string $view,array $parameters = []):string
    {

        return self::getContentView($view,$parameters);
    }

}