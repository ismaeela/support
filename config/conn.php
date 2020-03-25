<?php
  $dbhost = "localhost";
  $dbname = "support";
  $dbuser = "root";
  $dbpass= "";
  try {
      $pdo = new PDO("mysql:host=$dbhost; dbname=$dbname;" ,$dbuser,$dbpass);
      $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      
  } catch (PDOException $e) {
      echo $e->getMessage();
  }
  

?>