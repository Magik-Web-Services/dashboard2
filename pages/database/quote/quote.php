<?php
include('../dbconnect.php');

if (isset($_POST['createQuote'])) {
    $CustomerName = $_POST['CustomerName'];
    $Invoice = $_POST['Invoice'];
    $OrderNumber = $_POST['OrderNumber'];
    $QuoteDate = $_POST['QuoteDate'];
    $ExpireyDate = $_POST['ExpireyDate'];
    $Salesperson = $_POST['Salesperson'];
    $Subject = $_POST['Subject'];
    $subTotal = $_POST['subTotal'];
    $Discount = $_POST['Discount'];
    $Adjustment = $_POST['Adjustment'];
    $TCS = $_POST['TCS'];
    $total = $_POST['total'];
    $termsAndConditions = $_POST['termsAndConditions'];

    $sql = "INSERT INTO `dashboard2_quote` (`customerName`, `invoice`, `qrderNumber`, `quoteDate`, `expireyDate`, `salesperson`, `subject`, `subTotal`, `Discount`, `Adjustment`, `TCS`, `total`, `termsAndConditions`) VALUES ('$CustomerName', '$Invoice', '$OrderNumber', '$QuoteDate', '$ExpireyDate', '$Salesperson', '$Subject', '$subTotal', '$Discount', '$Adjustment', '$TCS', '$total', '$termsAndConditions');";
    $form = mysqli_query($conn, $sql);


    if (isset($_POST['name']) && !empty($_POST['name']) && is_array($_POST['name'])) {
        foreach ($_POST['name'] as $key => $value) {
            $name = (!empty($_POST['name'][$key])) ? $_POST['name'][$key] : '';
            $qty = (!empty($_POST['qty'][$key])) ? $_POST['qty'][$key] : '';
            $unit = (!empty($_POST['unit'][$key])) ? $_POST['unit'][$key] : '';
            $rate = (!empty($_POST['rate'][$key])) ? $_POST['rate'][$key] : '';
            $amount = (!empty($_POST['amount'][$key])) ? $_POST['amount'][$key] : '';

            $sql2 = "UPDATE dashboard2_items i, dashboard2_quote q SET  `qty`='$qty',`amount`=' $amount' WHERE `name`='$name' OR `unit`=' $unit' OR `sellingPrice`='$rate'";
            $form2 = mysqli_query($conn, $sql2);

            $sql3 = "SELECT *
            FROM matches m
            JOIN teams t1 ON m.team_A_id = t1.id
            JOIN teams t2 ON m.team_B_id = t2.id";

            // if ($form2) {
            //     echo "dashboard2_items";
            // } else {
            //     echo "dashboard2_items Not Update";
            // }


        }
    }
}
