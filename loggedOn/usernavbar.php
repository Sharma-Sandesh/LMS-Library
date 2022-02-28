<?php

    session_start();
    if(isset($_SESSION["loggedOn"]) &&$_SESSION["loggedOn"]) {
        $username = "";
        if (isset($_SESSION["userName"])) {
            $username = $_SESSION["userName"];
        }
    }else{
        session_destroy();
        header("Location:../View/signup.php");
        exit();
    }
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, fit-to-scale=yes ,maximum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../BootStrap/http_stackpath.bootstrapcdn.com_bootstrap_4.4.1_css_bootstrap.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../BootStrap/http_ajax.googleapis.com_ajax_libs_jquery_3.5.1_jquery.js"></script>
    <script src="../BootStrap/http_code.jquery.com_jquery-3.4.1.slim.js"></script>
    <script src="../BootStrap/http_cdn.jsdelivr.net_npm_popper.js@1.16.0_dist_umd_popper.js"></script>
    <script src="../BootStrap/http_stackpath.bootstrapcdn.com_bootstrap_4.4.1_js_bootstrap.js"></script>


    <title><?php echo $username." Home"?></title>
</head>

<body style="background-color:white">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mx-auto">
    <a class="navbar-brand" href="#">The LMS Library</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuItems">


        <ul class="navbar-nav ml-0">
            <li class="nav-item"><a href="welcome.php" class="nav-link">Dashboard</a></li>


            <li class="nav-item"><a class="nav-link" href="browse.php">Browse</a></li>

            <li class="nav-item"><a class="nav-link" href="account.php">Account</a> </li>
        </ul>

            <form action="searchBooks.php" method="post" class="text-white ml-auto">

                <label for="attr">Search By : </label>
                <select id="attr" name="attr">
                    <option value="1" selected>Title</option>
                    <option value="2">ISBN</option>
                    <option value="3">ISBN-13</option>
                    <option value="4">Author</option>
                    <option value="5">Publisher</option>
                </select>


                <input class="text-dark" style="margin-top: auto" type="text" id="srch" name="srch"
                placeholder="enter here..."><button style="margin-top: auto" class="btn btn-primary" type="submit"><img style="height: fit-content" src="../BootStrap/Icons/search.svg"></button>


            </form>




        <ul class="navbar-nav ml-auto mr-5">

            <div class="dropdown mr-3" style="width: auto;height: auto">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $username?>
                </button>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item btn btn-primary btn-outline-dark"  href="../Model/logout.php" >Logout</a>
                </div>
            </div>
        </ul>

    </div>

</nav>

</body>
</html>
