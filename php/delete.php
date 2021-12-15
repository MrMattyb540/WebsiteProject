<?php
session_start();

$connection = mysqli_connect('localhost','root','');

mysqli_select_db($connection, 'registration');

$name=$_GET['row'];
$query = "DELETE FROM booking WHERE name = '$name'";

$data=mysqli_query($connection, $query);

if($data)
{
    echo "<font color='green'>Record Deleted From Database";
}
else
{
    echo "<font color='red'>Failed To Delete Record From Database";
}
?>

