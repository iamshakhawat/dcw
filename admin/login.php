<?php
session_start();

if (isset($_SESSION['login']) || isset($_COOKIE['login'])) {
    header("location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 my-auto">
                <div class="card">
                    <form id="loginform">
                        <h2 class="text-center p-3">Admin Login</h2>
                        <hr class="mt-1">
                        <div class="form-group px-3 mb-3">
                            <label>Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input required type="email" name="email" class="form-control rounded-0" placeholder="Username or Email">
                            </div>
                        </div>
                        <div class="form-group px-3 mb-3">
                            <label>Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-key"></i></span>
                                </div>
                                <input required type="password" name="password" class="form-control rounded-0" placeholder="Password">
                            </div>
                        </div>
                        <div class="px-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                            <a href="./forgot.php" class=" text-decoration-none">Forget Password?</a>
                        </div>
                        <button type="submit" value="adminLogin" name="action" class="btn btn-primary btn-hover rounded-0 d-block  mx-auto my-3 loginbtn
                        ">Login</button>
                        <p class="text-center mt-3">New Member? <a href="register.php" class=" text-decoration-none">Register</a></p>
                        <div class="result mx-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/login.js"></script>
</body>

</html>