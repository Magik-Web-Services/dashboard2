<?php include('../common/header.php'); ?>
<?php include('../database/dbconnect.php'); ?>

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
                        <h3 class="page-title"> New Quote </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="quote.php">New Quote</a></li>
                                <li class="breadcrumb-item"><a href="Allquote.php">All Quote</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="f-row row">
                        <form class="row ">
                            <div class="col-md-7">
                                <label for="validationDefault01" class="form-label">Customer name</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>select customer</option>
                                    <?php
                                    $sql = "SELECT * FROM `dashboard2_customers`";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?php echo $row["firstName"];
                                                        echo "&nbsp;";
                                                        echo $row["lastName"]; ?>"><?php echo ucfirst($row["firstName"]);
                                                                                    echo "&nbsp;";
                                                                                    echo ucfirst($row["lastName"]); ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-7">
                                <label for="validationDefault03" class="form-label">Invoice #</label>
                                <input type="tel" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-md-7">
                                <label for="validationDefault03" class="form-label">Order Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Quote Date</label>
                                <input type="date" class="form-control" id="inputCity">

                            </div>

                            <div class="col-md-3">
                                <label for="inputCity" class="form-label">Expirey Date</label>
                                <input type="date" class="form-control" id="inputCity">

                            </div>
                            <div class="btm-bdr"></div>

                            <div class="col-md-7">
                                <label for="validationDefault01" class="form-label">Salesperson</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Select or Add Salesperson</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                            <div class="btm-bdr"></div>
                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">Subject</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Let your customer know what this Invoice is for">
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">

                                <div class="card">
                                    <div id="container">
                                        <form action="" method="post">
                                            <!-- <button onclick="addNewRow()">Add New Row
                                            </button> -->
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
                                                    <tr class="listitems" id="itemId_1">
                                                        <td>
                                                            <select class="selItem" id="item_item_1" style='width: 200px;'>
                                                                <option value='0'>- Search Item -</option>
                                                            </select>
                                                        </td>
                                                        <td><input onchange="calculate(this)" id="item_qty_1" class="qty" type="number" value="1" name="qty"></td>
                                                        <td><input id="item_unit_1" class="unit" type="text" name="unit"></td>
                                                        <td><input onchange="calculate(this)" id="item_rate_1" class="rate" type="number" value="0" name="rate"></td>
                                                        <td><input onchange="calculate(this)" readonly id="item_amount_1" class="amount" type="number" value="0" name="amount"></td>
                                                        <td><input id="item_delete_1" type="button" value="delete" onclick="deleteRow(this)" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="row g-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="validationDefault01" class="form-label">Sub Total</label>
                                    <input type="text" id="Sub_Total" readonly onchange="calculate2(this)" class="form-control" placeholder="0.00">
                                </div>
                                <div class="col-md-5">
                                    <label for="Discount" class="form-label">Discount</label>
                                    <div class="d-flex">
                                        <input class="form-control" onchange="calculate2(this)" id="Discount" type="number" value="0" name="Discount">
                                        <select id="selectTax" onchange="calculate2(this)" class="form-select">
                                            <option selected value="%">%</option>
                                            <option value="$">$</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label for="Adjustment" class="form-label">Adjustment</label>
                                    <input type="text" id="Adjustment" onchange="calculate2(this)" class="form-control" placeholder="0.00">
                                </div>
                                <div class="col-md-5">
                                    <label for="inputState" class="form-label">TCS</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select a tax</option>
                                        <option value="1">gold tax</option>
                                        <option value="2">hardware tax</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="validationDefault01" class="form-label">Total</label>
                                    <input type="text" onchange="calculate2(this)" id="total" readonly class="form-control" placeholder="0.00">
                                </div>
                            </div>
                        </form>

                        <div class="file-up">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <label for="floatingTextarea2">Terms And Conditions</label>
                                        <textarea class="form-control" placeholder="Terms And Conditions" id="floatingTextarea2" style="height: 100px"></textarea>

                                    </div>
                                </div>
                                <div class="col upload-bg">
                                    <input type="file" id="myFile">
                                    <p>Attach File(s) to Quote</p>

                                </div>
                            </div>
                            <div class="pd">
                                <button type="button" class="btn btn-primary">Save as Draft</button>
                                <button type="button" class="btn btn-primary">Save and Send</button>
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <input type="hidden" value="1" id="item_count" />
                            </div>
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
                            // Unit
                            jQuery("#" + jQuery(ele)[0].childNodes[5].childNodes[0].id).val(response[0].unit)
                            // Rate
                            jQuery("#" + jQuery(ele)[0].childNodes[7].childNodes[0].id).val(response[0].sellingPrice)
                            // Calaculate
                            calculate(jQuery(ele)[0].childNodes[1].childNodes[1]);
                            // console.log(jQuery(ele)[0].childNodes[1].childNodes[1].id);
                        },
                        cache: true
                    })
                });;
            }
            Ajax()
        </script>
</body>

</html>