<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo SITE_URL; ?>pages/dashboard.php">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo SITE_URL; ?>pages/customer/customer.php">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">New Customer</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo SITE_URL; ?>pages/items/items.php">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Items</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo SITE_URL; ?>pages/quote/quote.php">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Quote</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Invoices</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo SITE_URL; ?>pages/invoice/all-invoice.php">All Invoices</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo SITE_URL; ?>pages/invoice/add-invoice.php">Add Invoice</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo SITE_URL; ?>pages/invoice/new-invoice.php">Add New Invoice</a></li>
          


        </ul>
      </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="<?php echo SITE_URL; ?>pages/user/login.php"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo SITE_URL; ?>pages/user/register.php"> Register </a></li>

        </ul>
      </div>
    </li> -->

  </ul>
</nav>