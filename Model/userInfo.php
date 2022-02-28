<?php
    //session_start();
    require_once ("dbconnect.php");

    global $db;

    $sql="SELECT * FROM usernames WHERE id=:uid";
    $statement = $db->prepare($sql);
    $statement->bindValue(':uid',$_SESSION['userID']);
    $statement->execute();
    $res = $statement->fetch();
    return $res;






?>
