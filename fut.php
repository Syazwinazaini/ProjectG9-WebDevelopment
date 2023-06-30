<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','futsal');

// get the post records

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$total_adults=$_POST['total_adults'];
$checkin_date=$_POST['checkin_date'];
$hour=$_POST['hour'];
$price=$_POST['price'];
$court_preference=$_POST['court_preference'];
    

// database insert SQL code
$sql = "INSERT INTO `people` (`Id`, `name`, `email`, `phone`, `total_adults`, `checkin_date`, `hour`, `price`, `court_preference`) VALUES ('0','$name', '$email', '$phone', '$total_adults', '$checkin_date', '$hour', '$price', '$court_preference')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Futsal Records Inserted";
}

?>