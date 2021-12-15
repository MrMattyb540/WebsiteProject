<?php

session_start();

$connection = mysqli_connect('localhost','root','');

mysqli_select_db($connection, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$select = "select * from usertable where name = '$name'";

$result = mysqli_query($connection, $select);

$rownum = mysqli_num_rows($result);

if($rownum == 1) {
    echo"Username Already Taken";
}else{
    $intotable = "Insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($connection, $intotable);
    echo" Registration Successful ";   
}



?>