<?php
include(dirname(__FILE__)."/../dbconnect.php");
$sql2 = "select * from dashboard2_customers";
$result = mysqli_query($conn,$sql2);

while ($row = $result->fetch_assoc()) {
    echo "
            <tr>
                <td><input type='checkbox' name='mdeleteIdCus[]' value='" .  $row["customerId"] . "'></td>
                <!-- <td style='display:none'>" . $row["customerId"] . "</td>-->
                <td>" . ucfirst($row["firstName"]) ."&nbsp;". $row["lastName"] ."</td>
                <td>" . $row["companyName"] . "</td>
                <td>" . $row["customerEmail"] . "</td>
                <td>" . $row["customerPhone"] . "</td>
                <td>" . $row["Creation_Date"] . "</td>
                <td>" . $row["Modified_Date"] . "</td>
                <td>
                <a href='#'>
                    <i id='".$row["customerId"]."' class='fa-solid fa-pen-to-square Customersedit' style='color: #0fff4b;'></i>
                </a>
                <a href='#'>
                <i id='".$row["customerId"]."'class='fa-solid fa-trash Customerdeletes' style='color: #ff0000;'></i>
                </a>
                </td>
            </tr>
                ";
}
?>