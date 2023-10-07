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
    <title>Forget Email</title>
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 my-auto">
                <div class="card">
                    <form id="resetpassform">
                        <h2 class="text-center p-2">Forgot Email</h2>
                        <hr class="mt-1">
                        <div class="form-group px-3 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input required type="email" name="email" class="form-control rounded-0" placeholder="Email Address">
                            </div>
                        </div>
                        <button type="submit" value="resetpass" name="action" class="btn btn-primary  rounded-0 d-block  mx-auto my-3 resetBtn
                        ">Reset Password</button>
                        <p class="d-flex justify-content-center"> Back to <a href="login.php" class=" text-decoration-none ml-1"> login</a></p>
                        <div class="result mx-3 mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/forgot.js"></script>
</body>

</html>