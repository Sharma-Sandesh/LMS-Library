<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase="users";
$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $db = new PDO("mysql:host=$servername;dbname=$dbase", $username, $password,$options);

} catch(PDOException $e) {

    echo $e->getMessage();
    include("dbconnect_error.php");
    exit();
}
?>