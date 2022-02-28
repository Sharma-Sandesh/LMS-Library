<?php

    require_once("dbconnect.php");
    global $db;
    $sql = "SELECT * from book";

    $statement = $db->prepare($sql);
    $statement->execute();
    $res = $statement->fetchAll();
    $rcount = $statement->rowCount();
    $statement->closeCursor();

    return $res;




?>


