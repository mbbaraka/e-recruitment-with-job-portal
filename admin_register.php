<?php
include_once 'header.php';
?>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="process.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="email" name="username" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control">
                            </div>                                    
                                <button type="submit" name="register_admin" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="admin_login.php"> Sign in</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
