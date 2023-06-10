<?php
include(dirname(__FILE__)."/../dbconnect.php");
$sql2 = "select * from dashboard2_quote";
$result = mysqli_query($conn,$sql2);

while ($row = $result->fetch_assoc()) {
    echo "
            <tr>
            <td><input type='checkbox' name='mdeleteIdQuote[]' value='" .  $row["quote_id"] . "'></td>
                <td>" . $row["creation_Date"] . "</td>
                <td>" . $row["invoice"] . "</td>
                <td>" . $row["customerName"] . "</td>
                <td>" . $row["total"] . "</td>
                <td>
                <a href='#'>
                    <i id='".$row["quote_id"]."' class='fa-solid fa-pen-to-square quoteEdit' style='color: #0fff4b;'></i>
                </a>
                <a href='#'>
                <i id='".$row["quote_id"]."'class='fa-solid fa-trash quotedelete' style='color: #ff0000;'></i>
                </a>
                </td>
            </tr>
                ";
}
