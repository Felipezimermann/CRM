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
    $information = [];
    $response = ConnectBank::Connect("select count(id) as ttClientes from client");
    foreach ($response as $key=>$value){
      $information['ttClientes'] = $value['ttClientes'];
    }
    $response = ConnectBank::Connect("select count(id) as ttCompleto from client
    where
          last_name <> ''and
          email <> '' and
          gender <> ''and
          ip_address <> '' and
          company <> '' and
          client.city <> '' and
          client.title <> '' and
          client.website <> '';");
    foreach ($response as $key=>$value){
      $information['ttCompleto'] = $value['ttCompleto'];
    }
    $information['ttIncompleto'] = $information['ttClientes'] - $information['ttCompleto'];

    $response = ConnectBank::Connect("select count(id) as ttGenero from client where gender <> ''");
    foreach ($response as $key=>$value){
      $information['ttGenero'] = $value['ttGenero'];
    }

    $information['ttsGenero'] = $information['ttClientes'] - $information['ttGenero'];

    $response = ConnectBank::Connect("select count(id) as ttEmail from client where email <> ''");
    foreach ($response as $key=>$value){
      $information['ttEmail'] = $value['ttEmail'];
    }

    $information['ttsEmail'] = $information['ttClientes'] - $information['ttEmail'];

    $response = ConnectBank::Connect("select count(id) as ttSobrenome from client where last_name <> ''");
    foreach ($response as $key=>$value){
      $information['ttSobrenome'] = $value['ttSobrenome'];
    }

    $information['ttsSobrenome'] = $information['ttClientes'] - $information['ttSobrenome'];

    foreach ($information as$key=>$value){
      $id = $key.'_percentage';
      $valor_base = $information['ttClientes'];
      $valor = $value;
      if($valor){
        $resultado = ($valor / $valor_base) * 100;
      }else{
        $resultado = 0;
      }
      $resultado = intval($resultado);

      $information["$id"] = "style='width: $resultado%'";
    }

    $response = ConnectBank::Connect("select distinct first_name from client");
    $information['nmDiferente'] =  $response->num_rows;

    $response = ConnectBank::Connect("select distinct city from client");
    $information['cityDiferente'] =  $response->num_rows;

    $response = ConnectBank::Connect("select gender from client where gender like 'M%'");
    $information['male'] =  $response->num_rows;

    $response = ConnectBank::Connect("select gender from client where gender like 'F%'");
    $information['Female'] =  $response->num_rows;

    $information['data'] = date('d/m/Y');
    return $information;
  }

}
