<?php


session_start();

$connection = mysqli_connect('localhost','root','');

mysqli_select_db($connection, 'registration');

$DayOfWeek = $_POST['DayOfWeek'];
$Time = $_POST['Time'];
$name = $_POST['name'];

$select = "select * from booking where Time = '$Time'";

$result = mysqli_query($connection, $select);


$rownum = mysqli_num_rows($result);

if($rownum == 1) {
    echo"Time Already Taken";
}else{
    $intotable = "Insert into Booking(DayOfWeek , Time , name) values ('$DayOfWeek' , '$Time' , '$name')";
    mysqli_query($connection, $intotable);
    echo" Booking Successful ";   
    header('location:../websiteproject.html');
}
?>