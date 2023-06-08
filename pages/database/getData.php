<?php
include 'dbconnect.php';

if (!isset($_POST['searchTerm'])) {
    $ele = $_POST['Element'];
    // echo '<script>console.log('.$ele.')</script>';
    $fetchData = mysqli_query($conn, "select * from dashboard2_items");

    $data = array();
    while ($row = mysqli_fetch_array($fetchData)) {
        $data[] = array("id" => $row['itemId'], "text" => $row['name'], "ele" => '#'.$ele);
    }
    echo json_encode($data);
}