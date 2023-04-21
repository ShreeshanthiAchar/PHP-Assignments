<?php 

$sName = "localhost";
$uName = "shreeshanthi";
$pass = "shreeshanth1";
$db_name = "shreeshanthi_authdb";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}