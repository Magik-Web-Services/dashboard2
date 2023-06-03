<?php include(dirname(__FILE__) . '/common/header.php'); ?>

<body>
  <div class="container-scroller">
    <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with
                this template!</p>
              <a href="https://www.bootstrapdash.com/product/connect-plus-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/connect-plus-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- pages/common/_navbar.php -->
    <?php include(dirname(__FILE__) . '/common/navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- pages/common/_sidebar.php -->
      <?php include('common/sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Invoices dashboard </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

              <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar me-1"></i>12 May 2023 </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border ">
                <!-- <ul class="nav nav-tabs tab-transparent" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="performance-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                  </li>

                </ul> -->

              </div>
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Invoices</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Completed</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Customers</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Increased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-eye icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Increased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Feedback</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                          <div class="dashFoard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-cube icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Decreased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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


  <!--pages/common/_footer.php -->
  <?php include('common/footer.php'); ?>

  <!-- Dashboard -->
  <script src="<?php echo INV_ASSETS; ?>/js/dashboard.js"></script>
  <script src="<?php echo INV_ASSETS; ?>/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <!-- hamburger -->
  <script src="<?php echo INV_ASSETS; ?>/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo INV_ASSETS; ?>/js/off-canvas.js"></script>
    <script src="<?php echo INV_ASSETS; ?>/js/misc.js"></script>
</body>

</html>