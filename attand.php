<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','attandance');

// get the post records

$name=$_POST['name'];
$customer_phone=$_POST['customer_phone'];
$customer_email=$_POST['customer_email'];
$checkin=$_POST['checkin'];
$time=$_POST['time'];
$kehadiran=$_POST['kehadiran'];


    

// database insert SQL code
$sql = "INSERT INTO `swimmer` (`Id`, `name`, `customer_phone`, `customer_email`, `checkin`, `time`, `kehadiran`) VALUES ('0','$name', '$customer_phone','$customer_email', '$checkin', '$time', '$kehadiran')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Attandance Records Inserted";
}

?>