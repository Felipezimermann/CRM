<?php

session_status();
require './app/controllers/page/Page.php';
require './app/model/database/ConnectBank.php';
require './app/controllers/uploadFile/UploadFile.php';
require './app/model/excel/FileReader.php';
require './app/model/user/User.php';
require './app/utils/View.php';
require'router/router.php';



