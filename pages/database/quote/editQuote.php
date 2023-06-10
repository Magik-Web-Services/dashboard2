<?php
include('../dbconnect.php');

if (isset($_GET['editQuote'])) {
    $id = $_GET['editQuote'];
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

    $sql = "UPDATE `dashboard2_quote` SET `user_id`='$user_id',`customerName`='$CustomerName',`invoice`='$Invoice',`orderNumber`='$OrderNumber',`quoteDate`='$QuoteDate',`expireyDate`='[value-7]',`salesperson`='[value-8]',`subject`='[value-9]',`subTotal`='[value-10]',`Discount`='[value-11]',`discount2`='[value-12]',`Adjustment`='[value-13]',`TCS`='[value-14]',`total`='[value-15]',`termsAndConditions`='[value-16]',`items`='[value-17]',`creation_Date`='[value-18]' WHERE `quote_id`='$id'";
    $form = mysqli_query($conn, $sql);

    header("Location: ../../quote/quote.php");
}
