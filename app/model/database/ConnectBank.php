<?php

namespace app\model\database;
class ConnectBank
{



  private function start()
  {
    $connection = mysqli_connect("localhost", "root", "", "crm");

    if (!$connection) {
      echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      die();
    }
    return $connection;
  }

  public function connect($sql)
  {
    $connection = self::start();

    $sql = mysqli_query($connection,"$sql");
    $response = mysqli_fetch_assoc($sql);
    mysqli_close($connection);
    return $response;
  }


}
