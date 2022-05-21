<?php

namespace app\model\excel;
use Cassandra\Numeric;

class FileReader
{
  public static function read(string $file,string $separation,int $lastColumn):array
  {

    $response = array();
    $f = fopen($file, 'r');

    if ($f) {

      $header = fgetcsv($f, 0, $separation, $lastColumn);
      $row = 0;
      while ($line = fgetcsv($f, 0, ",")) {
        $data = [];

        if ($row++ == 0) {
          continue;
        }

        foreach ($header as $key=>$value){
          $data[$value] = $line[$key];
        }
        array_push($response,$data);
      }
      fclose($f);
    }

    return $response;
  }
}
