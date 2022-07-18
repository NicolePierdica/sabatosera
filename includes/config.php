<?php

// database Connection variables
define('HOST', 'sandbox.citynetgroup.com'); // Database host name ex. localhost
define('USER', 'sandbox_pierdica'); // Database user. ex. root ( if your on local server)
define('PASSWORD', '977@,+eR^=.B'); // user password  (if password is not set for user then keep it empty )
define('DATABASE', 'user_accounts'); // Database Database name


function DataBase()
{
  try {
      $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
      return $db;
  } catch (PDOException $e) {
      return "Error!: " . $e->getMessage();
      die();
  }
}
?>


