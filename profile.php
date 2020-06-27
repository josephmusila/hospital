<?php
    
    $message="";
    if(count($_POST)>0) {
        $conn = mysqli_connect("localhost","root","","hospital");
        $result = mysqli_query($conn,"SELECT * FROM member WHERE firstname='" . $_POST["firstname"] . "' and password = '". $_POST["password"]."'");
        $count  = mysqli_num_rows($result);
        if($count==0) {
            $message = "Invalid Username or Password!";
        } else {
            $message = "You are successfully authenticated!";
        }
    }
    ?>
    <html>
    <head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <!--javascript offline-->
    <script type="text/javascript" src="C:\Users\user\Desktop\bootstrap\new.js"></script>
    <link rel="stylesheet" href="hos.css">
</head>
    </head>
    <body>
    <div class="container-fluid">
        <!--
           <script>
            thanks();
        </script>
       -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <a href="#" class="navbar-brand">INFINITY MEDICAL SERVICES<box  height="30px" width="100px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="#navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Women </a>
                    </li>
                    <li class="navbar-item">
                        <a href="men.html" class="nav-link" onclick="log()">Men </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">kids</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Trending</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="categories">
                <div class="row">
                    <div class="col-3 bg-dark">
                        <div class="alert alert-primary">CATEGORIES</div>
                        <div class="btn btn-outline-warning btn-block"><a href="register.html">REGISTER</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="profile.php">MY PROFILE</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="doctor.html">CONSULT DOCTOR</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="about.html">ABOUT US</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="contact.html">CONTACTS</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="emergency.html">EMERGENCIES</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="ambulance.html">AMBULANCE SERVICES</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="faq.html">FAQS</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="remote.html">REMOTE SERVICES</a></div>
                        <div class="btn btn-outline-warning btn-block"><a href="help.html">HELP</a></div>
                        <hr class="my5">
                    </div>
    <form name="frmUser" method="post" action="">
        <div class="message"><?php if($message!="") { echo $message; } ?></div>
            <table  cellpadding="10" cellspacing="1" width="500"  class="tblLogin">
                <tr class="tableheader">
                <td  colspan="2">Enter Login Details</td>
                </tr>
                <tr class="tablerow">
                <td>
                <input type="text" name="firstname" placeholder="firstname" class="login-input" required></td>
                </tr>
                <tr class="tablerow">
                <td>
                <input type="password" name="password" placeholder="Password" class="login-input" required></td>
                </tr>
                <tr class="tableheader">
                <td  colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
    </form>
    <a href="register.html">sign up</a>
    </body>
    </html>