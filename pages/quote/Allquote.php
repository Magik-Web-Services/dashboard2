<?php include('../common/header.php'); ?>

<body>
    <div class="container-scroller">
        <!-- common:../../common/_navbar.html -->

        <?php include('../common/navbar.php'); ?>
        <!-- common -->
        <div class="container-fluid page-body-wrapper">
            <!-- common:../../commons/_sidebar.html -->
            <?php include('../common/sidebar.php'); ?>
            <!-- common -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                    <h3 class="page-title"> All Quote </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="quote.php">New Quote</a></li>
                                <li class="breadcrumb-item active"><a href="Allquote.php">All Quote</a></li>
                        </nav>
                    </div>
                    <form action="../database/items/deleteitem.php" method="POST">
                        <button type="submit" name="mDeleteitem" class="btn btn-danger">Delete</button>
                        <table border="1" class="mt-5 table" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <!-- <th style="display: none;"></th> -->
                                    <th>NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th>RATE</th>
                                    <th>USAGE UNIT</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../database/quote/Allquote.php')
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common/footer.php'); ?>
    <script src="<?php echo INV_ASSETS; ?>/js/misc.js"></script>
</body>

</html>