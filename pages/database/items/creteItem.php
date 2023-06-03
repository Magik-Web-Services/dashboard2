<?php
include('../dbconnect.php');

if (isset($_POST['Types'])) {
    $productType = $_POST['Types'];
    $Name = $_POST['Name'];
    $unit = $_POST['unit'];
    $sellingPrice = $_POST['sellingPrice'];
    $Description = $_POST['Description'];

    $sql = "INSERT INTO `dashboard2_items` (`type`, `name`, `unit`, `sellingPrice`, `description`) VALUES ('$productType', '$Name', '$unit', '$sellingPrice', '$Description');";

    $form = mysqli_query($conn, $sql);
    echo "edit";
}

header("Location: ../../items/items.php");
