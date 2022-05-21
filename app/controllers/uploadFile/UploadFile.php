<?php
namespace app\controllers\uploadFile;
use app\model\excel\FileReader;
use app\model\user\User;

class UploadFile
{
  public static function action($method)
  {
    return self::{$method[2]}();
  }
  private static function customerImport()
  {
    $file = $_FILES['file'];
    return User::newUser(FileReader::read($file['tmp_name'],',',9));
  }

}
