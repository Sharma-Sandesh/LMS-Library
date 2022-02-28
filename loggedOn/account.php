<?php

    require_once("usernavbar.php");
    require_once ("../Model/userInfo.php");

?>

<div class="container container-fluid container-xl mx-auto text-left bg-white text-dark" style="width: fit-content;border: 3px solid black;padding:15px;margin-top:20px;margin-bottom:20px">
    <?php if(isset($_GET['msg'])){
        if($_GET['msg'] == 1 || $_GET['msg'] == 4 || $_GET['msg'] == 5) {
            echo htmlspecialchars("Changes saved sucessfully.");
        }else if($_GET['msg'] == 2){
            echo htmlspecialchars("No changes detected.");
        }else if($_GET['msg'] == 3){

            echo htmlspecialchars("Invalid Changes. Please try other values.");
        }
    }?>
    <h5 class="text-center"><u>Account Information</u></h5><br>
    <form method="post" action="../Model/updateAccount.php">

        <label for="fname"><b>First Name:</b></label>
        <input type="text" id="fname" value="<?php echo $res['fName']; ?>" disabled><br>

        <label for="lname"><b>Last Name:</b></label>
        <input type="text" id="lname" value="<?php echo $res['lName']; ?>" disabled><br>

        <label for="uname"><b>Username: </b></label>
        <input type="text" id="uname" value="<?php echo $res['uName'];?>" disabled><br>

        <lable for="email"><b>Email Address:</b></lable>
        <input type="email" id="email" value="<?php echo $res['email'] ;?>" disabled><br><br>

        <!--<input type="submit" class="btn btn-primary" value="Save Changes">-->
    </form>
</div>



<?php include("../View/footer.html")?>