<?php
include("../dbconnect.php");
$sno = $_GET['editItem'];
if (isset($_POST['Type'])) {
    $productType = $_POST['Type'];
    $Name = $_POST['Name'];
    $unit = $_POST['unit'];
    $sellingPrice = $_POST['sellingPrice'];
    $Description = $_POST['Description'];

    $sql = "UPDATE `dashboard2_items` SET `type`='$productType',`name`='$Name',`unit`='$unit',`sellingPrice`='$sellingPrice',`description`='$Description' WHERE `itemId` = $sno";

    $form = mysqli_query($conn, $sql);
    echo "edit";

    if ($form) {
        echo "Update";
    } else {
        echo "item Not Update";
    }
    header("Location: ../../items/allitem.php");
}
?>