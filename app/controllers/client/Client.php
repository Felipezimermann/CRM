<?php

namespace app\controllers\client;
use app\model\client\Client as ClientModel;
class Client
{
  public static function action(array $method,bool $dynamic = true){
    if($dynamic){
      return self::{$method[2]}();
    }
    return self::{$method[0]}();
  }

  private function newClient(): string
  {

    $nome      = $_REQUEST['nome']??'';
    $sobrenome = $_REQUEST['sobrenome']??'';
    $genero    = $_REQUEST['genero']??'';
    $email     = $_REQUEST['email']??'';
    $companhia = $_REQUEST['companhia']??'';
    $cidade    = $_REQUEST['cidade']??'';
    $website   = $_REQUEST['website']??'';

    $data = [[
      'first_name'=>$nome,
      'last_name' =>$sobrenome,
      'email'     =>$email,
      'gender'    =>$genero,
      'ip_address'=>$_SERVER['REMOTE_ADDR'],
      'company'   =>$companhia,
      'city'      =>$cidade,
      'title'     =>'',
      'website'   =>$website
    ]];

    return ClientModel::newClient($data);
  }
  private function search()
  {
    return ClientModel::infoClient();
  }
  private function customerReport(): array
  {

    return  ClientModel::customerReport();

  }
}
