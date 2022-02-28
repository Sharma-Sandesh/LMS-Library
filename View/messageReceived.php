<?php

include("../View/navbar.html")

?>
<html>

<head>
    <title>LMS Contact</title>

</head>
<body id="contactBackground">
    <br><br><br>
    <div class="container container-fluid container-xl text-center bg-dark text-white mx-auto" style="border-radius: 30px;margin-bottom: 400px;padding: 100px">
        <h3>Thank you for contacting support, <?php echo htmlspecialchars($_GET['name']) ?></h3><br>
        <h4>Your message has been received.</h4><br>
        <p>We will review your qurey and get back to you as soon as possible</p>
    </div>
    <br>
    <br>
</body>

</html>



<?php include("../View/footer.html") ?>
