<html>
<link rel="stylesheet" href="hos.css">
<?php

$firstname= $_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$pwd=MD5($password);

if(!empty($firstname)| !empty($lastname)|| !empty($email) || !empty($gender)|| !empty($status)|| !empty($phone) || !empty($password)){
    $con = mysqli_connect("localhost","root","","hospital");

    $query="INSERT INTO `member` (`firstname`, `lastname`, `email`, `phone`, `password`,`gender`,`status`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$password','$gender','$status');";
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


echo "HELLO $firstname \n"; 
echo "<span>YOUR REGISTRATION DETAILS HAVE BEEN RECEIVED SUCCEFULLY</span>";
 
function isMemberExists($firstname){
    $query="SELECT * FROM member WHERE firstname=?";
    $paramType="s";
    $paramArray=array($firstname);
    $memberCount=$this->ds->numRows(query,$paramType,$paramArray);
    return $memberCount;
}


?>
<html>