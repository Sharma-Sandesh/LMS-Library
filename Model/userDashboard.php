<?php

    require_once("../Model/dbconnect.php");
    $res="";
    if(isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == true){
        global $db;
        $sql = "SELECT book.title, borrows.* FROM borrows INNER JOIN book ON borrows.bookID = book.bookid
WHERE borrows.userID = :uid ORDER BY borrows.rentDate ASC ";

        $statement = $db->prepare($sql);
        $statement->bindValue(':uid',$_SESSION['userID']);
        $statement->execute();
        $res=$statement->fetchAll();
        $statement->closeCursor();


    }else{
        session_destroy();
        header("Location:../View/signup.php");
        exit();
    }


?>
