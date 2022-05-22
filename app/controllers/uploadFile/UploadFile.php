<?php
namespace app\controllers\uploadFile;
use app\model\excel\FileReader;
use app\model\client\Client;

class UploadFile
{
  public static function action($method)
  {
    return self::{$method[2]}();
  }
  private static function customerImport(): string
  {
    $file = $_FILES['file'];
    return Client::newClient(FileReader::read($file['tmp_name'],',',9));
  }

}
