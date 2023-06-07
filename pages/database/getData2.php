<?php
include 'dbconnect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $fetchData = mysqli_query($conn, "select * from dashboard2_items where itemId like '$id'");

    $data = array();
    while ($row = mysqli_fetch_array($fetchData)) {

        $data = array("id" => $row['itemId'], "text" => $row['name'], "unit" => $row['unit'], "sellingPrice" => $row['sellingPrice']);
        // $data[] = array("id" => $row['itemId'], "text" => $row['name']);
    }
    echo json_encode($data);
}
