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
            <h3 class="page-title"> All Invoices</h3>
            <!-- <button type="button" class="btn btn-primary" onclick="addNewRow()">Add New Row </button> -->
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
              <table id="myTable" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>



              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- common:../../commons/_footer.html -->
          <?php include('../../pages/common/footer.php'); ?>