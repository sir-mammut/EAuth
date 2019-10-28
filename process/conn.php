<?php

try{

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "mstore";

    $pdo = new PDO("mysql:host=localhost;dbname=eauth", "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  echo 'Connection failed: '.$e->getMessage();
}


?>
