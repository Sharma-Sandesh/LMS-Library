<?php
require_once("dbconnect.php");
require("filterInput.php");

function checkUser($username, $email){


    $username = trimText($username);
    $email= trimText($email);

    if(!injected($username) && !injected($email)) {
        global $db;
        $sql = "SELECT uName FROM usernames WHERE uName= :username OR email = :email ";

        $statement = $db->prepare($sql);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $res=$statement->rowCount();
        $statement->closeCursor();
        return $res;

    }else{

       return -1;
    }
}

?>