<?php

namespace app\model\client;
use app\model\database\ConnectBank;
class Client
{
  public  function newClient(array $client):string
  {
    $error = array();
    $success = true;

    foreach ($client as$key=>$value){
         $first_name = $value['first_name']?? '';
         $last_name  = $value['last_name']?? '';
         $email      = $value['email'] ?? '';
         $gender     = $value['gender'] ?? '';
         $ip_address = $value['ip_address'] ?? '';
         $company    = $value['company'] ?? '';
         $city       = $value['city'] ?? '';
         $title      = $value['title'] ?? '';
         $website    = $value['website']?? '';


      $response = ConnectBank::Connect("
                  INSERT INTO crm.client (first_name, last_name, email, gender, ip_address, company, city, title, website)
                  VALUES ('$first_name', '$last_name', '$email', '$gender', '$ip_address', '$company', '$city', '$title', '$website')
                  ",true);

      if($response == ''){
        $success = '';
        array_push($error,array(
          'error'=>'Erro ao inserir dados do cliente no banco',
          'listClient' => array(
            'Nome' =>utf8_encode($value['first_name']).' '.utf8_encode($value['last_name']),
            'email'=>utf8_encode($value['email'])
          )
        ));
      }
    }
    if($success == ''){
      return json_encode($error);
    }
    return json_encode(array('success'=>true));
  }
  public function infoClient()
  {
    $client = $_REQUEST['searchClient']??'';
    $filtro = $_REQUEST['filtro']??'';
    $pagina = $_REQUEST['pagina']??'';

    switch ($filtro){
      case 'cl':
        $filtro ="where first_name like '%$client%'";
        break;
      case 'td':
        $filtro = '';
        break;
    }
    $response = ConnectBank::Connect("select count(id) as qtd_clients from client $filtro");

    $qtd_clients = $response->fetch_assoc();

    $total_clients  = $qtd_clients['qtd_clients'];


    $total_reg = "50";

    if (!$pagina) {
      $pc = "1";
    } else {
      $pc = $pagina;
    }


    $inicio = $pc - 1;
    $inicio = $inicio * $total_reg;
    $tp = $total_clients / $total_reg;
    $anterior = $pc -1;
    if($anterior == 0){
      $anterior = 1;
    }

    $proximo = $pc +1;
    $tp = ceil($tp);
    if($proximo > $tp){
      $proximo = $tp;
    }

    $response = ConnectBank::Connect("select * from client $filtro  limit $inicio,$total_reg");
    $listClients = array();
    foreach ($response as $key=>$value){
      array_push($listClients,$value);
    }




    $pagination = array(
      "Paginas"        =>$tp,
      'pg_anterios'    =>$anterior,
      'pg_proxima'     =>$proximo,
      'cc'             =>$inicio
    );

    return json_encode(array('pagina'=>$pagination,'listaClients'=>$listClients));
  }

  function customerReport()
  {

  }

}
