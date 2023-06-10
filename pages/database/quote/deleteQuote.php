<?php
include_once("../dbconnect.php");
// deleteQuote
if (isset($_GET['deleteQuote'])) {
    echo "deleteQuote";
    $sno = $_GET['deleteQuote'];
    $deleteSql = "DELETE FROM `dashboard2_quote` WHERE `quote_id` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
    header("Location: ../../quote/Allquote.php");
}

// mDeleteQuote
if (isset($_POST['mDeleteQuote'])) {
    if (isset($_POST['mdeleteIdQuote']) && !empty($_POST['mdeleteIdQuote']) && is_array($_POST['mdeleteIdQuote'])) {
        foreach ($_POST['mdeleteIdQuote'] as $key) {
            $MdeleteSql = "DELETE FROM `dashboard2_quote` WHERE `quote_id` = $key";
            $deleteServer = mysqli_query($conn, $MdeleteSql);

            if ($deleteServer) {
                echo "Delete";
            } else {
                echo "Quote Not Delete";
            }
        }
    }
    header("Location: ../../quote/Allquote.php");
}
?>