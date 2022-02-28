<?php


    session_start();
    require_once ("filterInput.php");
    require_once ("dbconnect.php");

    $uName = $_POST['uName'];
    $pass = $_POST['pword'];
    $pass.= $uName;
    $pass = sha1($pass);

    if(!injected($uName)){

        global $db;

        $sql = "SELECT fName,lName,id,uName FROM usernames WHERE uName = :uName AND pWord = :passw";

        $statement = $db->prepare($sql);
        $statement->bindValue(':uName', $uName);
        $statement->bindValue(':passw',$pass);
        $statement->execute();
        $res = $statement->fetch();
        $rcount = $statement->rowCount();
        $statement->closeCursor();
       if($rcount == 1){
            session_regenerate_id();
            $_SESSION['userID'] = $res['id'];
            $_SESSION['userName'] = $res['uName'];
            $_SESSION['loggedOn'] = true;
            $_SESSION['firstName'] = $res['fName'];
            $_SESSION['lastName'] = $res['lName'];
            $_SESSION['fullname'] = $res['fName']." ".$res['lName'];

            header("Location:../loggedOn/welcome.php");
            exit();

        }else if($rcount == 0){
            header("Location:../View/signup.php?msg=6") ;
         }

    }else{

        header("Location:../View/signup.php?msg=5");
        session_destroy();
        exit();
    }




?>
