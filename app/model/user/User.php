<?php

namespace app\model\user;
use app\model\database\ConnectBank;
class User
{
  public  function newUser(array $users):string
  {
    $error = array();
    $success = true;
    foreach ($users as$key=>$value){
         $first_name = $value['first_name']?? '';
         $last_name =  $value['last_name']?? '';
         $email = $value['email'] ?? '';
         $gender = $value['gender'] ?? '';
         $ip_address = $value['ip_address'] ?? '';
         $company = $value['company'] ?? '';
         $city = $value['city'] ?? '';
         $title = $value['title'] ?? '';
         $website = $value['website']?? '';


      $response = ConnectBank::Connect("
                  INSERT INTO crm.user (first_name, last_name, email, gender, ip_address, company, city, title, website)
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
    return '';
  }
}
