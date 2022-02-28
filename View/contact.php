<?php
    require("navbar.html");

?>

<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, fit-to-scale=yes ,maximum-scale=1.0">


</head>
<body id="contactBackground">
    <br><br><br>
    <div class="container container-fluid container-xl bg-secondary text-white text-left mx-auto p-5" style="border:3px solid black;border-radius: 30px">
        <h5 style="text-align: center"><u>CONTACT FORM</u></h5>
        <br>
        <form action="../Model/contactus.php" method="get" id="queryform">

            <label for="cname" aria-label="left" style="min-width: 100px">Name: </label>
            <input type="text" id="cname" name="cname" required>
            <br>
            <label for="usrname" style="min-width: 100px">Username: </label>
            <input type="text" id="usrname" name="usrname" placeholder="If applicable">
            <br>
            <label for="cemail" style="min-width: 100px">Email: </label>
            <input type="email" id="cemail" name="cemail">
            <br>
            <label for="subj" style="min-width: 100px">Subject: </label>
            <input type="text" id="subj" name="subj">
            <br>
            <label for="cquery" style="min-width: 100px">Query/Message</label><br>
            <textarea rows="4" cols="50" form="queryform" name="cquery" id="cquery" placeholder="Enter your message here..."></textarea>
            <br>
            <input type="submit" value="Submit" class="btn btn-dark">
        </form>


    </div>

    <br>
    <br>
    <br>
</body>

</html>
<?php require("footer.html"); ?>