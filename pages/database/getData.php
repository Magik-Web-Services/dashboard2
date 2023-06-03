<?php
include("dbconnect.php");

if (isset($_POST['itm_details'])) {
    $itm_details = $_POST['itm_details'];
    $sql = "select * from dashboard2_items like '%$itm_details%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $itemId  = $row["itemId"];
            $name = $row["name"];
            $unit = $row["unit"];
            $sellingPrice = $row["sellingPrice"];

            echo $name;
            $data = array($itemId, $name, $unit, $sellingPrice);
            echo json_encode($data);
        }
    }
}




$row = mysqli_fetch_assoc($result);
$itemId  = $row["itemId"];
$name = $row["name"];
$unit = $row["unit"];
$sellingPrice = $row["sellingPrice"];

echo $name;
$data = array($itemId, $name, $unit, $sellingPrice);
echo json_encode($data);
