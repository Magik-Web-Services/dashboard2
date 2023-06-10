<?php include('../common/header.php');
include('../database/dbconnect.php');

if (isset($_GET['editQuote'])) {
    $sno = $_GET['editQuote'];
    $sqlQuery = "SELECT * FROM `dashboard2_quote` WHERE quote_id = {$sno}";
    $result2 = mysqli_query($conn, $sqlQuery);
    $row2 = $result2->fetch_assoc();

    $jsonitems = $row2['items'];
    $objitems =  json_decode($jsonitems);
    $arrayitems = get_object_vars($objitems);
}

?>

<body>
    <div class="container-scroller">
        <!-- common:../../common/_navbar.html -->

        <?php include('../../pages/common/navbar.php'); ?>
        <!-- common -->
        <div class="container-fluid page-body-wrapper">
            <!-- common:../../commons/_sidebar.html -->
            <?php include('../../pages/common/sidebar.php'); ?>
            <!-- common -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Edit Quote </h3>
                    </div>
                    <div class="f-row row">
                        <form class="row" action="../database/quote/editQuote.php?editQuote=<?php echo $sno; ?>" method="post">
                            <input type="hidden" name="user_id" id="user_id">
                            <div class="col-md-7">
                                <label for="CustomerName" class="form-label">Customer name</label>
                                <select class="form-select form-control" name="CustomerName">
                                    <option selected value="<?php echo $row2["customerName"] ?>"><?php echo $row2["customerName"] ?></option>
                                </select>
                            </div>

                            <div class="col-md-7">
                                <label for="Invoice" class="form-label">Invoice #</label>
                                <input type="number" value="<?php echo $row2["invoice"] ?>" class="form-control" name="Invoice" required>
                            </div>
                            <div class="col-md-7">
                                <label for="OrderNumber" class="form-label">Order Number</label>
                                <input type="number" value="<?php echo $row2["orderNumber"] ?>" class="form-control" name="OrderNumber" require>
                            </div>
                            <div class="col-md-6">
                                <label for="QuoteDate" class="form-label">Quote Date</label>
                                <input type="date" value="<?php echo $row2["quoteDate"] ?>" class="form-control" name="QuoteDate">

                            </div>

                            <div class="col-md-3">
                                <label for="ExpireyDate" class="form-label">Expirey Date</label>
                                <input type="date" value="<?php echo $row2["expireyDate"] ?>" class="form-control" name="ExpireyDate">

                            </div>
                            <div class="btm-bdr"></div>

                            <div class="col-md-7">
                                <label for="Salesperson" class="form-label">Salesperson</label>
                                <select class="form-select form-control" name="Salesperson">
                                    <option disabled selected>Select or Add Salesperson</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                            <div class="btm-bdr"></div>
                            <div class="col-md-6">
                                <label for="Subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" value="<?php echo $row2["subject"] ?>" name="Subject" placeholder="Let your customer know what this Invoice is for">
                            </div>

                            <div class="row">
                                <div class="col-lg-12 grid-margin stretch-card">

                                    <div class="card">
                                        <div id="container">
                                            <button type="button" class="btn btn-primary" onclick="Ajax()" id="Addline">Add New Row </button>
                                            <button type="button" class="btn btn-primary" onclick="deleteRow()">Delete Row </button>
                                            <br>
                                            <br>
                                            <table id="employee-table">
                                                <thead>
                                                    <tr>
                                                        <th>ITEM DETAILS
                                                        </th>
                                                        <th>QUANTITY
                                                        </th>
                                                        <th>Unit
                                                        </th>
                                                        <th>RATE
                                                        </th>
                                                        <th>AMOUNT
                                                        </th>
                                                        <th>Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $x = 0;
                                                    foreach ($arrayitems['qty'] as  $value) {

                                                        echo '<tr class="listitems" id="itemId_'.($x+1).'">
                                                            <td>
                                                                <input type="hidden" value="'.$arrayitems["name"][$x].'" id="item_name_'.($x+1).'" name="name[]">
                                                                <select class="selItem" id="item_item_'.($x+1).'" style="width: 200px;">
                                                                    <option value="'.$arrayitems["name"][$x].'" selected="selected">'.$arrayitems["name"][$x].'</option>
                                                                </select>
                                                            </td>
                                                            <td><input onchange="calculate(this)" id="item_qty_'.($x+1).'" class="qty" name="qty[]" type="number" value="' . $value . '" name="qty"></td>
                                                            <td><input id="item_unit_'.($x+1).'" value="'.$arrayitems["unit"][$x].'" class="unit" readonly type="text" name="unit[]"></td>
                                                            <td><input onchange="calculate(this)" readonly value="'.$arrayitems["rate"][$x].'" id="item_rate_'.($x+1).'" class="rate" type="number" value="0" name="rate[]"></td>
                                                            <td><input onchange="calculate(this)" readonly value="'.$arrayitems["amount"][$x].'" id="item_amount_'.($x+1).'" class="amount" type="number"  name="amount[]"></td>
                                                            <td><input id="item_delete_'.($x+1).'" type="button" value="delete" onclick="deleteRow(this)" /></td>
                                                        </tr>';
                                                        $x++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="subTotal" class="form-label">Sub Total</label>
                                        <input type="text" id="Sub_Total" value="<?php echo $row2["subTotal"] ?>" name="subTotal" readonly onchange="calculate2(this)" class="form-control" placeholder="0.00">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="Discount" class="form-label">Discount</label>
                                        <div class="d-flex">
                                            <input class="form-control" value="<?php echo $row2["Discount"] ?>" id="Discount" onchange="calculate2(this)" type="number" value="0" name="Discount">
                                            <select id="selectTax" onchange="calculate2(this)" class="form-select">
                                                <?php
                                                if ($row["discount2"] == "%") {
                                                    echo '<option selected value="%">%</option>';
                                                } else {
                                                    echo '<option value="%">%</option>';
                                                }

                                                ?>
                                                <?php
                                                if ($row["discount2"] == "$") {
                                                    echo '<option seleted value="$">$</option>';
                                                } else {
                                                    echo '<option value="$">$</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="Adjustment" class="form-label">Adjustment</label>
                                        <input type="text" id="Adjustment" value="<?php echo $row2["Adjustment"] ?>" name="Adjustment" onchange="calculate2(this)" class="form-control" placeholder="0.00">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="TCS" class="form-label">TCS</label>
                                        <select name="TCS" class="form-select">
                                            <?php
                                            if ($row["TCS"] == "gold tax") {
                                                echo '<option selected value="gold tax">gold tax</option>';
                                            } else {
                                                echo '<option value="gold tax">gold tax</option>';
                                            }

                                            ?>
                                            <?php
                                            if ($row["TCS"] == "hardware tax") {
                                                echo '<option selected value="hardware tax">hardware tax</option>';
                                            } else {
                                                echo ' <option value="hardware tax">hardware tax</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="text" value="<?php echo $row2["Adjustment"] ?>" id="total" onchange="calculate2(this)" name="total" readonly class="form-control" placeholder="0.00">
                                    </div>
                                </div>

                                <div class="file-up">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating">
                                                <!-- <label for="termsAndConditions">Terms And Conditions</label> -->
                                                <textarea class="form-control" placeholder="Terms And Conditions" name="termsAndConditions" style="height: 100px"><?php echo $row2["termsAndConditions"] ?></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="col upload-bg">
                                            <input type="file" id="myFile">
                                            <p>Attach File(s) to Quote</p>
                                        </div> -->
                                    </div>
                                    <div class="pd">
                                        <!-- <button type="button" class="btn btn-primary">Save as Draft</button> -->
                                        <button name="createQuote" type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-primary">Cancel</button>
                                        <input name="count" type="hidden" value="<?php echo $x; ?>" id="item_count" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="footer">
                    <div class="footer-inner-wraper">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <?php include('../common/footer.php'); ?>
    <script src="<?php echo INV_ASSETS; ?>/js/misc.js"></script>
    <script src="<?php echo INV_ASSETS; ?>/vendors/js/custom.js"></script>
    <script>
        const Ajax = () => {
            $(".selItem").select2({
                ajax: {
                    url: "../../pages/database/getData.php",
                    type: "post",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        let ele = this[0].parentNode.parentNode.id
                        return {
                            searchTerm: params.term, // search term
                            Element: ele
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            }).on('select2:select', function(e) {
                let data = e.params.data;
                let ele = data.ele;
                let dataId = data.id
                $.ajax({
                    url: "../../pages/database/getData2.php",
                    type: "post",
                    dataType: 'json',
                    delay: 250,
                    data: {
                        dataId: dataId
                    },
                    success: function(response) {
                        // Name
                        jQuery("#" + jQuery(ele)[0].childNodes[1].childNodes[1].id).val(response[0].name)
                        // Unit
                        jQuery("#" + jQuery(ele)[0].childNodes[5].childNodes[0].id).val(response[0].unit)
                        // Rate
                        jQuery("#" + jQuery(ele)[0].childNodes[7].childNodes[0].id).val(response[0].sellingPrice)
                        // Amount
                        jQuery("#" + jQuery(ele)[0].childNodes[9].childNodes[0].id).val(response[0].sellingPrice)
                        // Calaculate
                        calculate(jQuery(ele)[0].childNodes[1].childNodes[1]);
                    },
                })
            });;
        }
        Ajax()
    </script>
</body>

</html>