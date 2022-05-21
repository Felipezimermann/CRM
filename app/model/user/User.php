<?php

namespace app\model\user;
use app\model\database\ConnectBank;
class User
{
  public  function newUser(array $users)
  {

    $response = ConnectBank::Connect('select * from user');
    print_r($response);
    die();
    foreach ($users as$key=>$value){

    }
  }
}
