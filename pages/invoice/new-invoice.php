<?php include('../common/header.php'); ?>

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
                        <h3 class="page-title"> New Invoices </h3>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> New Quote </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> New Quote </li>
                            </ol>
                        </nav> -->
                    </div>
                    <div class="f-row row">
                        <form class="row ">
                            <div class="col-md-7">
                                <label for="validationDefault01" class="form-label">Customer name</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>select customer</option>
                                    <option value="1">Mr.</option>
                                    <option value="2">Mrs.</option>
                                    <option value="3">Miss.</option>
                                    <option value="3">Ms.</option>
                                    <option value="3">Dr.</option>
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
                                <label for="inputCity" class="form-label">Invoice Date</label>
                                <input type="date" class="form-control" id="inputCity">

                            </div>
                            <div class="col-md-3">
                                <label for="inputCity" class="form-label">Terms</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Due on Receipt</option>
                                    <option value="1">NET 15</option>
                                    <option value="2">NET 30</option>
                                    <option value="3">NET 45</option>
                                    <option value="3">NET 60</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="inputCity" class="form-label">Due Date</label>
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
                                        <!-- <button onclick="addNewRow()">Add New Row
                                            </button> -->
                                        <button type="button" class="btn btn-primary" id="Addline">Add New Row </button>
                                        <button type="button" class="btn btn-primary" onclick="deleteRow()">Delete Row </button>
                                        <br>
                                        <br>
                                        <table id="employee-table">
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
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="row g-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="validationDefault01" class="form-label">Sub Total</label>
                                    <input type="text" class="form-control" placeholder="0.00">
                                </div>
                                <div class="col-md-5">
                                    <label for="validationDefault01" class="form-label">Discount</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select Discount</option>
                                        <option value="1">%</option>
                                        <option value="2">$</option>


                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="validationDefault01" class="form-label">Adjustment</label>
                                    <input type="text" class="form-control" placeholder="0.00">
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
                        </div>
                    </div>

                    <!-- common:../../commons/_footer.html -->
                    <?php include('../../pages/common/footer.php'); ?>
                    <script src="<?php echo INV_ASSETS; ?>/js/misc.js"></script>
                    <script src="<?php echo INV_ASSETS; ?>/vendors/js/custom.js"></script>