<?php
    session_start();
    require_once ("dbconnect.php");
    require_once ("filterInput.php");

    $oldlName = $_SESSION["lastName"];
    $oldfName = $_SESSION["firstName"];

    $uID = $_SESSION["userID"];

    $newlName = $_POST["lname"];
    $newfName = $_POST["fname"];

    //$sql="";
    global $db;
    if(!injected($newlName) && !injected($newfName)) {
        if (strcmp($oldfName,$newfName) !== 0 && strcmp($oldlName, $newlName) == 0)  {

            $sql = "UPDATE usernames set `fName` = ':newf' WHERE `id` = ':un'";
            $statement = $db->prepare($sql);
            $statement->bindValue(':newf',$newfName);
            $statement->bindValue(':un',$_SESSION["userName"]);
            $statement->execute();
            $statement->closeCursor();
            $_SESSION["firstName"] = $newfName;
            header("Location:../loggedOn/account.php?msg=1");
            exit();
        } else if (strcmp($oldfName,$newfName) == 0 && strcmp($oldlName, $newlName) !== 0) {

            $sql = "UPDATE usernames set `lName` = ':newl' WHERE `uName` = ':un'";
            $statement = $db->prepare($sql);
            $statement->bindValue(':newl',$newlName);
            $statement->bindValue(':un',$_SESSION["userName"]);
            $statement->execute();
            $statement->closeCursor();
            $_SESSION['lastname'] = $newlName;
            header("Location:../loggedOn/account.php?msg=4");
            exit();
        } else if (strcmp($oldfName,$newfName) !== 0 && strcmp($oldlName, $newlName) !== 0) {

            $sql = "UPDATE usernames set `lName` = ':newl',`fName`= ':newf' WHERE `uName` = ':un'";
            $statement = $db->prepare($sql);
            $statement->bindValue(':newl',$newlName);
            $statement->bindValue(':newf',$newfName);
            $statement->bindValue(':un',$_SESSION["userName"]);
            $statement->execute();
            $statement->closeCursor();
            $_SESSION["firstName"] = $newfName;
            $_SESSION["lastName"] = $newlName;
            header("Location:../loggedOn/account.php?msg=5");
            exit();

        } else {

            header("Location:../loggedOn/account.php?msg=2");
            exit();

        }

    }else{

        header("Location:../loggedOn/account.php?msg=3");
        exit();

    }



?>
