<?php

$host =['localhost']; // name of the host
$dbusername =['root'];   // database user name
$password =[''];   // database password // I added password
$dbname =['test']; // database name
$tblname =['products']; // table of products

$conn = mysqli_connect('$host','$dbusername','$password','$dbname'); // connection 

if(!$conn->connect_error){
    die('Could not Connect MySql Server: '.$conn->connect_error );
}
?>