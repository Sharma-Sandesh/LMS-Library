
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, fit-to-scale=yes ,maximum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="BootStrap/http_stackpath.bootstrapcdn.com_bootstrap_4.4.1_css_bootstrap.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="BootStrap/http_ajax.googleapis.com_ajax_libs_jquery_3.5.1_jquery.js"></script>
    <script src="BootStrap/http_code.jquery.com_jquery-3.4.1.slim.js"></script>
    <script src="BootStrap/http_cdn.jsdelivr.net_npm_popper.js@1.16.0_dist_umd_popper.js"></script>
    <script src="BootStrap/http_stackpath.bootstrapcdn.com_bootstrap_4.4.1_js_bootstrap.js"></script>


    <title>The LLC Library</title>
</head>

<body style="background-color:white">

<nav class="navbar navbar-expand-sm navbar-dark bg-dark  mx-auto">
    <a class="navbar-brand" href="#">The LMS Library</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuItems">



        <ul class="navbar-nav mr-0">

            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>

            <li class="nav-item"><a href="View/about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="View/contact.php" class="nav-link">Contact</a></li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item" style="margin-top:2px"><a class="nav-link btn btn-outline-secondary" href="View/signup.php">Login / Sign up</a></li>


        </ul>

    </div>

</nav>

<div class="carousel slide" id="carouselSlides" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSlides" data-slide-to="1"></li>
        <li data-target="#carouseSLides" data-slide-to="2"></li>
        <li data-target="#carouseSLides" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" style="max-width: 100%;max-height: 600px" >

        <div class="carousel-item active">
            <img class="img-fluid" alt="First Image" src="Images/Slides/one.jpg">
        </div>

        <div class="carousel-item">
            <img class="img-fluid" alt="Second Image" src="Images/Slides/two.jpg">
        </div>
        <div class="carousel-item">
            <img  class="img-fluid" alt="Third Image" src="Images/Slides/three.jpg">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" alt="Fourth Image" src="Images/Slides/four.jpg">
        </div>

    </div>

    <a class="carousel-control-prev" href="#carouselSlides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

<footer class="bg-dark text-white text-center m0" >
    <div class="container p-4">
        <!-- Section: Social media -->
        <h5>Follow us on Social Medias</h5>

        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/LienManagementSolutions/" role="button">
                <img src="BootStrap/Icons/facebook.svg" alt="FacebookIcon">
            </a>

            <!-- Insta -->
            <a class="btn btn-outline-light btn-floating m-1" href=https://www.instagram.com/lmsproject/?hl=en#" role="button">
                <img src="BootStrap/Icons/instagram.svg" alt="Instagram Icon">
            </a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/lms_project" role="button">
                <img src="BootStrap/Icons/twitter.svg" alt="Twitter Icon">
            </a>

            <!-- LinkedIn -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/lmsproject/about/" role="button">
                <img src="BootStrap/Icons/linkedin.svg" alt="LinkedIn Icon">
            </a>

        </section>



    </div>
</footer>
</body>
</html>