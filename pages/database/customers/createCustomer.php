<?php
include('../dbconnect.php');

$customerType = $_POST['Customer_Type'];
$salutation = $_POST['Salutation'];
$Fname = $_POST['First_name'];
$Lname = $_POST['last_name'];
$customerPhone = $_POST['customerPhone'];
$customerEmail = $_POST['customerEmail'];
$companyName = $_POST['companyName'];
$Website = $_POST['Website'];

$sql = "INSERT INTO `dashboard2_customers` (`customerType`, `salutation`, `firstName`, `lastName`, `customerPhone`, `customerEmail`, `companyName`, `Website`) VALUES ('$customerType', '$salutation', '$Fname', '$Lname', '$customerPhone', '$customerEmail', '$companyName', '$Website');";

$form = mysqli_query($conn, $sql);

header("Location: ../../customer/customer.php");
?>