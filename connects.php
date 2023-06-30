<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records

$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$customer_phone=$_POST['customer_phone'];
$total_adults=$_POST['total_adults'];
$checkin=$_POST['checkin'];
$hour=$_POST['hour'];
$price=$_POST['price'];
$court_preference=$_POST['court_preference'];
    

// database insert SQL code
$sql = "INSERT INTO `registration` (`Id`, `customer_name`, `customer_email`, `customer_phone`, `total_adults`, `checkin`, `hour`, `price`, `court_preference`) VALUES ('0','$customer_name', '$customer_email', '$customer_phone', '$total_adults', '$checkin', '$hour', '$price', '$court_preference')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration Records Inserted";
}

?>