<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','equipment');

// get the post records

$name=$_POST['name'];
$customer_phone=$_POST['customer_phone'];
$equip_preference=$_POST['equip_preference'];
$Qty=$_POST['Qty'];
$shuttle=$_POST['shuttle'];
$total=$_POST['total'];

    

// database insert SQL code
$sql = "INSERT INTO `person` (`Id`, `name`, `customer_phone`, `equip_preference`, `Qty`, `shuttle`, `total`) VALUES ('0','$name', '$customer_phone', '$equip_preference', '$Qty', '$shuttle', '$total')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Person Records Inserted";
}

?>