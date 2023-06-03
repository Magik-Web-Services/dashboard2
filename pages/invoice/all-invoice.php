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
            <button type="button" class="btn btn-primary" onclick="addNewRow()">Add New Row </button>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
              <table id="example" style="width:100%">
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
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td></td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td></td>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>$90,560</td>
            </tr>
           
            <tr>
                <td></td>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>$725,000</td>
            </tr>
           
            <tr>
                <td></td>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td></td>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td></td>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td></td>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td></td>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>$850,000</td>
            </tr>
           
            <tr>
                <td></td>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>$164,500</td>
            </tr>
           
            <tr>
                <td></td>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td></td>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td></td>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>$138,575</td>
            </tr>
           
            <tr>
                <td></td>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td></td>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>$112,000</td>
            </tr>
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