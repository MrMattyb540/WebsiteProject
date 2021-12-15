<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$User = $_GET['user'];

$query2 = "DELETE FROM usertable WHERE name = '$User'";


$data2 = mysqli_query($con, $query2);


if($data2)
{
    echo "<font color='green'>Record Deleted From Database";
}
else
{
    echo "<font color='red'>Failed To Delete Record From Database";
}


?>