<?php include(dirname(__FILE__) . "/pages/common/header.php"); ?>
<?php include(dirname(__FILE__) . "/pages/database/dbconnect.php"); ?>

<?php
$login = false;
// $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from `dashboard2_users` WHERE userName='$userName'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                echo '<script>alert("Login!")</script>';
                $sno = $row["sno"];
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $userName;
                $_SESSION['userID'] = $sno;
                header("location: pages/dashboard.php");
            } else {
                echo '<script>alert("Invalid Credentials!")</script>';
                // $showError = "Invalid Credentials";
            }
        }
    } else {
        echo '<script>alert("Invalid Credentials!")</script>';
        // $showError = "Invalid Credentials";
        // header("location: ./signup.php");
    }
}
?>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="<?php echo INV_ASSETS; ?>/images/your_logo.png">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="post">
                                <div class="form-group">

                                    <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" required placeholder="Username">
                                </div>
                                <div class="form-group">

                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" required autocomplete="off" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="pages/register.php" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <?php include(dirname(__FILE__) . "/pages/common/footer.php"); ?>

</body>
</html>