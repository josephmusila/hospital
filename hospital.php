
<link rel="stylesheet" href="hos.css">
<?php

$firstname= $_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$age=$_POST['age'];
$employed=$_POST['employed'];
$password=$_POST['password'];

$message="";
if(!empty($firstname)| !empty($lastname)|| !empty($email) || !empty($gender)|| !empty($status)|| !empty($phone) || !empty($password)){
    $con = mysqli_connect("localhost","root","","hospital");

    $query="INSERT INTO `member` (`firstname`, `lastname`, `email`, `phone`,`id`,`age`, `password`,`gender`,`status`,`employed`,`photo`) VALUES ('$firstname', '$lastname', '$email', '$phone','$id','$age', '$password','$gender','$status','$employed','photo');";
    mysqli_query($con,$query);
    if (mysqli_connect_errno()){
        echo"failed to connect to mysql: " . mysqli_connect_errno();
        exit();
    
    }
      
}
else{
    echo"all fields must be filled";
    die();
}


$message="helo $firstname you have successfully registerd";


 



?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <script src="new.js"></script>
    <link rel="stylesheet" href="hos.css">
    <script>
            
            
            $(document).ready(function(){
                $("body").css("background-color","rgb(50,50,50)");
                $('form,.col').css("color","white");
            });
            $(document).ready(function(){
                $(".footer").css("height","50px");
                $(".footer").css("background-color","rgb(70,70,70)");
                $(".footer").css("text-align","right");
            });
            $(document).ready(function(){
                $("footer p").css("color","blue");
                 $("footer p").css("font-size","20px");
            });
           $(document).ready(function(){
            $("#button").click(function(){
                $("#button").effect("shake",{
                    times:10,
                    distance:100
                },3000,function(){
                    $(this).css("background-color","#cccccc");
                });
            });
           });
        </script>
</head>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <a href="#" class="navbar-brand">INFINITY MEDICAL SERVICES<box height="30px" width="100px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="#navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">HOME </a>
                    </li>
                    <li class="navbar-item">
                        <a href="profile.php" class="nav-link">LOG IN</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">CONTACTS</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">LOG OUT</a>
                    </li>
                </ul>
            </div>
        </nav>
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<button class="btn btn-block btn-primary" value="button" id="button">button</button>
<html>