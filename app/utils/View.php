<?php
namespace app\utils;

class View
{
    private  static function renderSubcontext(array &$parameters){

      $view = $parameters['view']??die('informar qual é a view');

      $file = __DIR__."/../../public/views/$view.html";
      $subcontext = file_exists($file)?file_get_contents($file):'';

      $vars = $parameters['viewParameter']['viewParameter']??false;

      if($vars){
        $keys = array_keys($vars);

        $keys = array_map(function($items){
          return '{{'.$items.'}}';
        },$keys);

        $subcontext = str_replace($keys,array_values($vars),$subcontext);
      }

      $parameters['view'] = $subcontext;

    }
    private static function getContentView(string $view,$parameters):string
    {

        $file = __DIR__."/../../public/views/$view.php";

        if($view != 'loading'){
          self::renderSubcontext($parameters);
        }
        return  require $file;

    }
    public static function render(string $view,array $parameters = []):string
    {
        return self::getContentView($view,$parameters);
    }

}
