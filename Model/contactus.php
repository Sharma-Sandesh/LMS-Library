<?php


   $cuusername = $_GET['usrname'];
    $cuemail= filter_input(INPUT_GET,'cemail', FILTER_VALIDATE_EMAIL);
    $cuname=$_GET['cname'];
    $sub = $_GET['subj'];
    $msg ="Name :$cuname \n Username: $cuusername\n";
    $msg .= $_GET['cquery'];
    $msg = wordwrap($msg,70);

    /*echo $cuusername.$cuemail.$cuname.$sub.$msg;

    $supportemail="sandesh.sharma2000@gmail.com";


    if(mail($supportemail,$sub,$msg) != false){

        header("Location:../View/messageReceived.php");
        exit();
    }else{
        header("Location:../View/errorsendingemail.php");
        exit;

    }
   */

header("Location:../View/messageReceived.php?name=$cuname");
exit();

?>
