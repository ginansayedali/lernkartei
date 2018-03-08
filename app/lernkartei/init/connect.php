<?php

include __DIR__ . '/../../../config.php';

$dsn = 'mysql:host='. DB_HOST .';dbname=' . DB_NAME . '';
$user = '' . DB_PASSWORD . '';
$pass = ''. DB_PASSWORD . '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $dbConnect = new PDO($dsn, $user, $pass, $option);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'you are connected to the database';
}
catch(PDOException $e){
  echo 'Faild to connect ' . $e->getMessage();
}
