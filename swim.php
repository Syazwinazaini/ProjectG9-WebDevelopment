<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','swimming');

// get the post records

$name=$_POST['name'];
$customer_phone=$_POST['customer_phone'];
$date=$_POST['date'];
$time=$_POST['time'];

    

// database insert SQL code
$sql = "INSERT INTO `customer` (`Id`, `name`, `customer_phone`, `date`, `time`) VALUES ('0','$name', '$customer_phone', '$date', '$time')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Customer Records Inserted";
}

?>