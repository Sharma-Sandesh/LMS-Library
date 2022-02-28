<?php

require_once ("dbconnect.php");
require_once ("validateUser.php");
require_once ("filterInput.php");

$firstName = $_POST['fname'];
$lastName=$_POST['lname'];
$userName = $_POST['uname'];
$password=$_POST['password'];
$confirmpassword=$_POST['cpword'];
$emailAddr=$_POST['emailaddr'];
//$ea = FILTER_VAR(INPUT_POST,'emailaddr',FILTER_VALIDATE_EMAIL);



if($password != $confirmpassword){

    header("Location:../View/signup.php?msg=1");
    exit();
}else {

    $result = checkUser($userName,$emailAddr);


    if ($result === -1) {
        header("Location:../View/signup.php?msg=3");
        exit();

    } else if ($result > 0) {

        header("Location:../View/signup.php?msg=2");
        exit();

    } else {
        $password .= $userName;
        $confirmpassword .= $userName;
        $password=sha1($password);
        $confirmpassword = sha1($confirmpassword);

        if(!injected($firstName) && !injected($lastName)) {
            global $db;


            $sql = "INSERT INTO usernames (fName,lName,uName,pWord,email) VALUES(:firstName,:lastName,:userName,:password,:emailAddr)";

            $statement = $db->prepare($sql);
            $statement->bindValue(':firstName', $firstName);
            $statement->bindValue(':lastName', $lastName);
            $statement->bindValue(':userName', $userName);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':emailAddr', $emailAddr);
            $statement->execute();
            $statement->closeCursor();
            header("Location:../View/signup.php?msg=4");
            exit();
        }else{
            header("Location:../View/signup.php?msg=3");
            exit();
        }

    }
}

?>