<?php

include_once("navbar.html");
//$msg = "";
?>
<html>
<head>

</head>
<body id="loginBackground">
<br><br><br>
<div class="container container-fluid container-xl mx-auto row text-center px-0" style="width: fit-content">



    <div class="container container-fluid container-xl col text-black bg-white" style="opacity: 0.75;padding:50px;margin-right:10px;border-radius: 30px">


        <br><br><h5><u>Already a member ?</u></h5>
        <br>
        <?php
        if(isset($_GET['msg'])){

            if($_GET['msg'] == 4){

                echo htmlspecialchars("\nAccount sucessfully created.\n");
            }else if($_GET['msg'] == 5){
                echo htmlspecialchars("\nInvalid username\nSQL keywords detected\n");
            }else if($_GET['msg'] == 6){

                echo htmlspecialchars("\nInvalid username or password\n");
            }


        }
        ?>
        <br>
        <form action="../Model/userlogin.php" method="post" class="p-3" style="padding: 10px;text-align:left">


            <label for="uName"><strong>Username :</strong></label><br>
            <input type="text" id="uName" name="uName" placeholder="enter here..." required><br><br>
            <label for="pword"><strong>Password :</strong></label><br>
            <input type="password" id="pword" name="pword" placeholder="(case-sensitive)" required><br><br>

            <input type="checkbox" id="rem" name="rem">
            <label for="rem">Remember me</label><br><br>

            <input type="submit" class="btn btn-primary text-white" value="Login">


        </form>

    </div>
    <div class="container container-fluid container-xl col text-white" style="padding:50px;opacity: 0.75;background: mediumpurple;border-radius: 30px">

        <br><br><h5><u><i>Not a member?<br>Register for free today..</i></u></h5>
        <?php if(isSet($_GET['msg']) && $_GET['msg'] == 3){
            echo htmlspecialchars("Invalid Username/Email! - SQL Injection Keywords detected.");

        }?>
        <br>
        <form action="../Model/adduser.php" method="post" class="p-3" style="text-align: left">
            <?php if(isset ($_GET['msg']) && $_GET['msg'] == 2){
                    echo htmlspecialchars("User with given username/email already exists.");
                }?>
            <br>
            <label for="fname"><strong>First Name</strong></label><br>
            <input type="text" id="fname" name="fname" required><br><br>

            <label for="lname"><strong>Last Name</strong></label><br>
            <input type="text" id="lname" name="lname" required><br><br>

            <label for="emailaddr"><strong>E-mail Address</strong></label><br>
            <input type="email" name="emailaddr" id="emailaddr" required><br><br>

            <label for="uname"><strong>Username</strong></label><br>
            <input id="uname" name="uname" type="text" required><br><br>

            <label for="password"><strong>Password</strong></label><br>
            <input type="password" name="password" id="passord" required><br><br>

            <label for="cpword"><strong>Confirm Password</strong></label><br>
            <input type="password" name="cpword" id="cpword" required><br> <?php if(isset($_GET['msg']) && $_GET['msg'] == 1){
                echo htmlspecialchars("\nPasswords do that match.\n");
            }

             ?><br><br>

            <input type="submit" class="btn btn-dark" value="Register"><br><br>
        </form>

    </div>


</div>
<br><br><br>
<?php include("footer.html"); ?>

</body>
</html>
