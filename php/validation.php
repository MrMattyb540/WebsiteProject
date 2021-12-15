<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$number = mysqli_num_rows($result);

if($number == 1) {
    echo"Login Successful";
    header('location:../websiteproject.html');
}else{
    echo"Unknown User, Please Try Again";
    
    
}
?>