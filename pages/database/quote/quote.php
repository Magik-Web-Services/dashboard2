<?php
include('../dbconnect.php');

if (isset($_POST['createQuote'])) {
    $user_id = $_POST['user_id'];
    $CustomerName = $_POST['CustomerName'];
    $Invoice = $_POST['Invoice'];
    $OrderNumber = $_POST['OrderNumber'];
    $QuoteDate = $_POST['QuoteDate'];
    $ExpireyDate = $_POST['ExpireyDate'];
    $Salesperson = $_POST['Salesperson'];
    $Subject = $_POST['Subject'];
    $subTotal = $_POST['subTotal'];
    $Discount = $_POST['Discount'];
    $Discount2 = $_POST['Discount2'];
    $Adjustment = $_POST['Adjustment'];
    $TCS = $_POST['TCS'];
    $total = $_POST['total'];
    $termsAndConditions = $_POST['termsAndConditions'];

    $item = [
        'name' => $_POST['name'],
        'qty' => $_POST['qty'],
        'unit' => $_POST['unit'],
        'rate' => $_POST['rate'],
        'amount' => $_POST['amount']
    ];

    $items = json_encode($item);

    echo "<pre>";
    echo $items;
    echo "</pre>";

    $sql = "INSERT INTO `dashboard2_quote` (`user_id`, `customerName`, `invoice`, `orderNumber`, `quoteDate`, `expireyDate`, `salesperson`, `subject`, `subTotal`, `Discount`, `discount2`, `Adjustment`, `TCS`, `total`, `termsAndConditions`, `items`) VALUES ('$user_id', '$CustomerName', '$Invoice', '$OrderNumber', '$QuoteDate', '$ExpireyDate', '$Salesperson', '$Subject', '$subTotal', '$Discount','$Discount2', '$Adjustment', '$TCS', '$total', '$termsAndConditions', '$items');";
    $form = mysqli_query($conn, $sql);

    header("Location: ../../quote/quote.php");
}